<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodopago extends Model
{
    protected $table = 'metodospago';
	protected $fillable = ['nombre'];
	public $timestamps = false;
}
