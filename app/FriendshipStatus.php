<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendshipStatus extends Model
{
    protected $table = 'friendshipstatus';
    public $timestamps = false;
    protected $guarded = [
     	'status_code', 'description'
    ];
}