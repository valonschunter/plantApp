<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
	public function plants()
	{
	return $this->belongsToMany('App\Plant', 'plant_trail');	
	}
}
