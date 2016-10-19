<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $fillable = ['name', 'region_id', 'district_id', 'description', 'other_name', 'address', 'slug'];

    public function region()
    {
    	return $this->belongsTo('App\Region');
    }

    public function district()
    {
    	return $this->belongsTo('App\District');
    }

    public function phones()
    {
    	return $this->hasMany('App\Phone');
    }    

    public function emails()
    {
        return $this->hasMany('App\Email');
    }
}
