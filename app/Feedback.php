<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //link to database table
    protected $table = 'feedbacks';

    //define which attributes are assignable
    protected $fillable = array('feedback');

    // DEFINE RELATIONSHIPS ------------------------------------
    public function user(){
        return $this->belongsTo('User');
    }

    public function cars(){
        return $this->belongsTo('Car');
    }
}


