<?php 
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Role;
use App\Models\Attachment;


class User extends Authenticatable
{
    use EntrustUserTrait { restore as private restoreA; }
    use SoftDeletes { restore as private restoreB; }

    public function restore()
    {
        $this->restoreA();
        $this->restoreB();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'contact_no','contact_no_2', 'address', 'photo_id', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public static $validation_rules = [
        'editor' => [
            'store' => [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password'
                ],
            'update' => [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,{id}',
                'password' => 'same:confirm-password'
                ]
            ],
    ];
    public static function getValidationRules($user_type, $data = array()){
        if(isset($data['id'])){
            $rules = self::$validation_rules[$user_type]['update'];
        } else{
            $rules = self::$validation_rules[$user_type]['store'];
        }
        $rules_json = json_encode($rules);
        if(is_array($data) && count($data)){
            foreach($data as $key => $val){
                $rules_json = str_replace('{'.$key.'}', $val, $rules_json);
            }
        }
        $rules = json_decode($rules_json, true);
        return $rules; 
    }

    public function photo()
    {
        return $this->belongsTo(Attachment::class,'photo_id');
    }

    public static function getAllStaff(){
        $roles = Role::getStaffIncludingAdminRoles();
        $id = $roles->pluck('id');
        
        $users = self::join('role_user', 'users.id', '=', 'role_user.user_id')
        ->whereIn('role_id',$id)
        ->get();
        
        return $users;
    }

    public static function getEditorStaff(){
        $role = Role::getEditorRole();
        $users = self::join('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_id',$role->id)
        ->orderBy('name', 'desc')->get();
        return $users;
    }
    
    public function getPhonesAttribute()
    {
        $phone = array();
        $phone[] = ($this->attributes['contact_no']!='' ? $this->attributes['contact_no'] : '');
        $phone[] = ($this->attributes['contact_no_2']!='' ? $this->attributes['contact_no_2'] : '');
        $phone = array_filter($phone);
        if(count($phone) > 0){
            return implode(',<br/>', $phone);
        }
        return null;
    }
    public function getRoleNameAttribute(){
        $id = ($this->attributes['id']!='' ? $this->attributes['id'] : '');
        $user = User::find($id);
        $roles = array();
        foreach( $user->roles as $role ){
            return $role->name;
        }
        return null;
    }

    
}