<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    public $fillable = [
        'name',
        'content',
        'featured_image',
    ];
    public $timestamps = true;
    
}