<?php

namespace App;

use App\Character;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model {

    protected $fillable = ['character_id', 'name', 'description'];

    public function character() {
        return $this->belongsTo('Character');
    }

}
