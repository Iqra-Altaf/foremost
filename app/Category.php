<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const SERVICE = 0;
	const GALLERY = 1;

	public static $names = [
		'Service',
		'Gallery'
	];

	public function packages()
	{
		return $this->hasMany('\App\Package');
	}
}
