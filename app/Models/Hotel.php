<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'location',
        'description',
        'image'
    ];

    public static $rules = array(
        'num_of_guests' => 'numeric',
        'check_in' => 'required',
        'check_out' => 'required'
    );

    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }
}