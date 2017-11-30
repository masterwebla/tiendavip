<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadoorden extends Model
{
    protected $table = 'estados_orden';
	protected $fillable = ['nombre'];
	public $timestamps = false;
}
