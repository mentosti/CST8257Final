<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $table = 'comment';
     public $timestamps = false;
     protected $fillable = [
     	'author_id', 'picture_id', 'comment_text'
     ];
}