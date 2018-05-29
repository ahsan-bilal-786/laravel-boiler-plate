<?php
namespace App; 
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole{

    

    public static function getByRoleName($name){
        return self::where('name', $name)->first();
    }
    public static function getEditorRole(){
        return self::where('name', 'editor')->first();
    }
    public static function getStaffRoles(){
        return self::whereNotIn('name', ['admin', 'drivers'])->get();
    }
    public static function getStaffIncludingAdminRoles(){
        return self::whereNotIn('name', ['customers', 'drivers'])->get();
    }
    

}