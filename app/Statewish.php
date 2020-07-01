<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statewish extends Model
{
    protected $fillable = ['name','contact','age','city','wish'];
}
