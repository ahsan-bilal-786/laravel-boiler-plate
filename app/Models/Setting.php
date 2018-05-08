<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model{

    public $fillable = ['key', 'value'];
    
    public static function getSettings(){
        $resp = [];
        $data = self::all();
        foreach($data as $row){
            $resp[$row->key] = $row->value;
        }
        return $resp;
    }
}
