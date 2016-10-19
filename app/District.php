<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['region_id', 'name', 'slug'];

    public function region()
    {
    	return $this->belongsTo('App\Region');
    }
}
