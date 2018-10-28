<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    protected $table = 'friendship';
    public $timestamps = false;
    protected $fillable = [
     	'friend_requesterid', 'friend_requesteeid', 'status'
    ];
}