<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

    public $fillable = ['original_name','attachment_type','path'];

    public function getUrlAttribute(){
        return url('app_files/'.$this->path);
    }
    public static function uploadProfilePhoto($file){
        $picture = "";
        $destinationPath = public_path() . '/app_files/user_profile/';
        if ($file) {
            ini_set('memory_limit', '-1');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $photo = sha1($filename . time()) . '.' . $extension;
            $resp = $file->move($destinationPath, $photo);
            $img = $destinationPath.$photo;
            
            $data = array(
                'original_name' => $filename,
                'attachment_type' => 'profile_photo',
                'path' => 'user_profile/'.$photo,
            );
            
            $resp = self::create($data);
            
            return $resp;
        }
        return false;
    }

    public static function uploadDriverAdvancePayment($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'driver_advance_payments');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
    }
    public static function uploadVehicleMaintenancePayment($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'vehicle_maintenance_payments');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
    }
    public static function uploadOrderEmailAttachments($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'order_email_attachments');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
    }
    public static function uploadOrderOtherAttachments($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'order_other_attachments');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
    }
    public static function uploadOrderExtraDocumentation($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'product_extra_documentation');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
    }
    public static function uploadCommentsAttachments($attachments = array()){
        $resp = array();
        if (isset($attachments) && count($attachments)) {
            foreach($attachments as $attachment){
                $attachment = self::uploadAttachment($attachment, 'order_comments_attachments');
                $resp[] = $attachment->id;
            }
        }
        return $resp;
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

    public static function deleteAttachment($id){
        $attachment = self::find($id);
        if($attachment){
            @unlink(public_path() . '/app_files/'.$attachment->path);
            $attachment->delete();    
        }
    }
}
