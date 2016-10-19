<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $fillable = ['name', 'region_id', 'region_id', 'district_id', 'description'];
}
