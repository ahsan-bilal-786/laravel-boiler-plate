<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;

class Setting extends Model{

    public $fillable = ['key', 'value'];
    public $timestamps = false;
    public static function getSettings(){
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        if(isset($settings['logo'])){
            $logo = Attachment::find($settings['logo']);
            $settings['logo'] = (isset($logo->url) ? $logo->url : null);
        }
        return $settings;
    }

    public static function saveSettings($input){
        $setting_ids = ['logo', 'tel_1', 'tel_2', 'fax_1', 'fax_2', 'address'];
        foreach($setting_ids as $id){
            if(isset($input[$id])){
                $setting = self::firstOrNew(['key' => $id]);
                $setting->value = $input[$id];
                $setting->save();    
            }
        }
        return true;    
    }
}
