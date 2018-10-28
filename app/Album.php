<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table = 'album';
	public $timestamps = false;
	protected $fillable = [
		'title', 'accessibility_code', 'description'
	];
}