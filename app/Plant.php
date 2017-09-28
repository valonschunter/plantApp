<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function trails()
	{
		return $this->belongsToMany('App\Trail', 'plant_trail');
	}
}
