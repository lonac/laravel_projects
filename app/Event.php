<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'church_id',
        'title',
        'slug',
        'description',
        'time',
    ];

    public function church()
    {
        return $this->belongsTo('App\Church');
    }
}
