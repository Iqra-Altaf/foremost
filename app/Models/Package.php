<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Package
 * @package App\Models
 * @version July 28, 2019, 7:23 am PKT
 *
 * @property \App\Models\Category category
 * @property \App\Models\Parlor parlor
 * @property string name
 * @property string desc
 * @property string image
 * @property integer category_id
 * @property integer parlor_id
 */
class Package extends Model
{

    public $table = 'packages';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'desc',
        'image',
        'category_id',
        'parlor_id',
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
        'desc' => 'string',
        'image' => 'string',
        'category_id' => 'integer',
        'parlor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'category_id' => 'required',
        'parlor_id' => 'required',
		'image' => 'required',
		'desc'  => 'max:1000'
    ];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function parlor()
	{
		return $this->belongsTo('App\Parlor');
	}
}
