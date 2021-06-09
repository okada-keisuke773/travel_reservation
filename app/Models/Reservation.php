<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'num_of_guests',
        'check_in',
        'check_out'
    ];

    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
}
