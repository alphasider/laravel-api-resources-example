<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email'
    ];

    public function events(){
        return $this->belongsToMany('App\Event');
    }
}
