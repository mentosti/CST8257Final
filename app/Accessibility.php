<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessibility extends Model
{
    protected $table = 'accessibility';
    public $timestamps = false;
    protected $guarded = [
        'accessibility_code', 'description'
    ];
}