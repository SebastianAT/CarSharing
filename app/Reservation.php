<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    //define which attributes are assignable
    protected $fillable = array('user_id','car_id','rent_from','rent_to');

    // DEFINE RELATIONSHIPS ------------------------------------
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
