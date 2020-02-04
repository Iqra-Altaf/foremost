<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parlor extends Model
{
	public function packages()
	{
		return $this->hasMany('\App\Package');
	}
}
