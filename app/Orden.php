<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';
	protected $fillable = ['numero','subtotal','envio','fecha','iduser',
							'idestado','idmetodo'];
}
