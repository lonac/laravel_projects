<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
    	'church_id',
    	'title',
    	'slug',
    	'description',
    	'from',
    	'to',
    	'published',
    	'day_id',
    ];

    public function church()
    {
    	return $this->belongsTo('App\Church');
    }
}
