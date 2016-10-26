<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected $fillable = ['event_id', 'url', 'description'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
