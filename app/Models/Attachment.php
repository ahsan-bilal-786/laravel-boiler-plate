<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

    public $fillable = ['original_name','attachment_type','path'];

    public function getUrlAttribute(){
        return url('app_files/'.$this->path);
    }
    public static function uploadAttachment($file, $directory_name = ''){
        $picture = "";
        $destinationPath = public_path() . '/app_files/'.$directory_name.'/';
        if ($file) {
            ini_set('memory_limit', '-1');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $photo = sha1($filename . time()) . '.' . $extension;
            $resp = $file->move($destinationPath, $photo);
            $img = $destinationPath.$photo;
            
            $data = array(
                'original_name' => $filename,
                'attachment_type' => $directory_name,
                'path' => $directory_name.'/'.$photo,
            );
            
            $resp = self::create($data);
            return $resp;
        }
        return false;
    }
    public static function uploadProfilePhoto($file){
        $attachment = self::uploadAttachment($file, 'user_profile');
        return $attachment;
    }

    public static function uploadPostsImages($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'driver_advance_payments');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
    }
    public static function deleteAttachment($id){
        $attachment = self::find($id);
        if($attachment){
            @unlink(public_path() . '/app_files/'.$attachment->path);
            $attachment->delete();    
        }
    }
}
