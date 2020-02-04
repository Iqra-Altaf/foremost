<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Category
 * @package App\Models
 * @version July 27, 2019, 7:04 pm UTC
 *
 * @property string name
 * @property integer type
 */
class Category extends Model
{

    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'type',
		'image',
		'desc',
		'is_popular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'  => 'required',
        'type'  => 'required',
		'image' => 'required',
		'desc'  => 'max:1000'
    ];

	public function packages()
	{
		return $this->hasMany('\App\Package');
	}

}
