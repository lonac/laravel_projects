<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['church_id', 'number'];

    public function church()
    {
    	return $this->belongsTo('App\Church');
    }
}
