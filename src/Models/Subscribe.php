<?php

namespace Selfreliance\subscribeform\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscribe extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
    	'email'
    ];
}
