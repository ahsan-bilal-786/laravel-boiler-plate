<?php
namespace App; 
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole{

    

    public static function getByRoleName($name){
        return self::where('name', $name)->first();
    }
    public static function getDriversRole(){
        return self::where('name', 'drivers')->first();
    }
    public static function getStaffRoles(){
        return self::whereNotIn('name', ['admin', 'drivers'])->get();
    }
    public static function getStaffIncludingAdminRoles(){
        return self::whereNotIn('name', ['customers', 'drivers'])->get();
    }
    

}