<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Parlor
 * @package App\Models
 * @version July 27, 2019, 10:52 pm UTC
 *
 * @property string name
 * @property string desc
 * @property string image
 */
class Parlor extends Model
{

    public $table = 'parlors';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'desc',
        'image',
		'is_popular',
		'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'desc' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required',
		'image' => 'required',
		'desc'  => 'max:1000'
    ];

	public function packages()
	{
		return $this->hasMany('\App\Package');
	}
}
