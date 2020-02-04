<?php

namespace App\Repositories;

use App\Models\Booking;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BookingRepository
 * @package App\Repositories
 * @version July 29, 2019, 2:02 am PKT
 *
 * @method Booking findWithoutFail($id, $columns = ['*'])
 * @method Booking find($id, $columns = ['*'])
 * @method Booking first($columns = ['*'])
*/
class BookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'package_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Booking::class;
    }
}
