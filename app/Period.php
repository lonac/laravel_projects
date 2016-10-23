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
    	'start_time',
    	'finish_time',
    	'published',
    	'day_id',
    ];

    public function church()
    {
    	return $this->belongsTo('App\Church');
    }

    public function day()
    {
        return $this->belongsTo('App\Day');
    }
}
