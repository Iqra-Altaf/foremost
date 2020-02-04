<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Booking
 * @package App\Models
 * @version July 29, 2019, 2:02 am PKT
 *
 * @property \App\Models\Package package
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection
 * @property integer user_id
 * @property integer package_id
 */
class Booking extends Model
{

    public $table = 'bookings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'user_id',
        'package_id',
		'date',
		'time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'package_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'package_id' => 'required'
    ];
	
	public function user()
	{
		return $this->belongsTo('\App\User');
	}

	public function package()
	{
		return $this->belongsTo('\App\Package');
	}
}
