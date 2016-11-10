<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['church_id', 'address'];

    public function church()
    {
    	return $this->belongsTo('App\Church');
    }
}
