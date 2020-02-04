<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Gallery
 * @package App\Models
 * @version July 28, 2019, 6:46 pm PKT
 *
 * @property \App\Models\Category category
 * @property \Illuminate\Database\Eloquent\Collection
 * @property string name
 * @property string desc
 * @property string image
 * @property integer category_id
 */
class Gallery extends Model
{

    public $table = 'galleries';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'desc',
        'image',
        'category_id'
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
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'category_id' => 'required',
		'image' => 'required',
		'desc'  => 'max:1000'
    ];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
