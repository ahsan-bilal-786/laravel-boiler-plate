<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Models\Attachment;
use DB;
use Hash;

class StaffController extends Controller
{
    public function index($role_name){
        
        $role = Role::getByRoleName($role_name);
        switch($role->name){
            case 'editor':
                $users = User::getEditorStaff();
            break;
        }
        return view('staff.index', compact('users', 'role'));
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($role_name)
    {   
        $role = Role::getByRoleName($role_name);
        return view('staff.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $role_name)
    {
        $role = Role::getByRoleName($role_name);
        
        $rules = User::getValidationRules($role->name);
        
        $this->validate($request, $rules);
        
        $input = $request->all();

        if(in_array($role->name, array('drivers'))){
            
            $input['password'] = Hash::make($input['password']);
        }
        
        if ($request->hasFile('photo')) {
            ini_set('memory_limit', '-1');
            $file = $request->file('photo');
            $attachment = Attachment::uploadProfilePhoto($file);
            $input['photo_id'] = (isset($attachment->id) ? $attachment->id : null);
        }

        $user = User::create($input);
        
        $user->attachRole($role->id);
        
        return redirect()->route('staffEdit', array('role_name' => $role->name, 'id' => $user->id))
        ->with('success', $role->display_name.' staff has created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($role_name, $id)
    {
        
        $user = User::find($id);
        $role = Role::getByRoleName($role_name);
        
        return view('staff.edit',compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $role_name, $id)
    {
        $role = Role::getByRoleName($role_name);
        
        $rules = User::getValidationRules($role->name, array('id' => $id));
        $this->validate($request, $rules);
        
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        if ($request->hasFile('photo')) {
            ini_set('memory_limit', '-1');
            $file = $request->file('photo');
            $attachment = Attachment::uploadProfilePhoto($file);
            $input['photo_id'] = (isset($attachment->id) ? $attachment->id : null);
        }

        $user = User::find($id);
        $user->update($input);
        
        return redirect()->route('staffEdit', array('role_name' => $role->name, 'id' => $user->id))
        ->with('success', $role->display_name.' staff has updated successfully.');
    }

    public function accountSettings(){
        $user = User::find(\Auth::user()->id);
        $role = \Auth::user()->roles[0];
        return view('users/accountSettings', compact('user', 'role'));
    }

    public function updateAccountSettings(Request $request)
    {
        
        $this->validate($request, [
            'password' => 'same:confirm-password'
        ]);
        
        $input = $request->all();
        if(!\Auth::user()->hasRole('admin')){
            unset($input['name']);
            unset($input['email']);
        }
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        if ($request->hasFile('photo')) {
            ini_set('memory_limit', '-1');
            $file = $request->file('photo');
            $attachment = Attachment::uploadProfilePhoto($file);
            $input['photo_id'] = (isset($attachment->id) ? $attachment->id : null);
        }

        $user = User::find(\Auth::user()->id);
        $user->update($input);
        
        return redirect()->route('staffAccountSettings')
        ->with('success','Profile has updated successfully.');
    }

    public function delete($role_name, $id){
        $role = Role::getByRoleName($role_name);
        User::find($id)->delete();
        return redirect()->route('staffList', array('role_name' => $role_name))
        ->with('success',  $role->display_name.'Staff has deleted successfully.');
    }
}
