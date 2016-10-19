<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'slug'];

    public function districts()
    {
    	return $this->hasMany('App\District');
    }

    public function churches()
    {
    	return $this->hasMany('App\Church');
    }
}
