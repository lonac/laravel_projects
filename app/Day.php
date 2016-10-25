<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['name', 'slug'];

    public function periods()
    {
    	return $this->hasMany('App\Period');
    }
}
