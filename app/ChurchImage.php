<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchImage extends Model
{
    protected $fillable = ['church_id', 'url', 'description'];
}
