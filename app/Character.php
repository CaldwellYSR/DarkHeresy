<?php

namespace App;

use App\Characteristic;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Character extends Model {

    protected $fillable = ['name', 'player_name', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function characteristics() {
        return $this->hasMany('App\Characteristic');
    }
}
