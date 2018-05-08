<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;
use Hash;


class SettingsController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return view('settings.edit',compact('settings'));
    }

    /**
 * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = \Validator::make([], []);
        $data = [];
        $input = $request->all();
        if(isset($input['order_id_start'])){
            
            $data[] = [
                'key' => 'order_id_start',
                'value' => $input['order_id_start'],
            ];

            if((int)$input['order_id_start']==0){
                $validator->getMessageBag()->add('order_id_start', 'Order Id should be a numnber.');
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data[] = ['key' => 'tel_1', 'value' => $input['tel_1']];
            $data[] = ['key' => 'tel_2', 'value' => $input['tel_2']];
            $data[] = ['key' => 'fax_1', 'value' => $input['fax_1']];
            $data[] = ['key' => 'fax_2', 'value' => $input['fax_2']];
            $data[] = ['key' => 'address', 'value' => $input['address']];
            
        }else{
            $validator->getMessageBag()->add('order_id_start', 'Order Id should be a numnber.');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        Setting::truncate();
        Setting::insert($data);

        return redirect()->route('generalSettings')
                        ->with('success','Settings have updated successfully');
    }

    
}
