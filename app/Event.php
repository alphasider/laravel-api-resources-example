<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name', 'date', 'city'
    ];

    public function participants(){
        return $this->belongsToMany('App\Participant');
    }
}
