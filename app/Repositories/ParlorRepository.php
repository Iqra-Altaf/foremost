<?php

namespace App\Repositories;

use App\Models\Parlor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ParlorRepository
 * @package App\Repositories
 * @version July 27, 2019, 10:52 pm UTC
 *
 * @method Parlor findWithoutFail($id, $columns = ['*'])
 * @method Parlor find($id, $columns = ['*'])
 * @method Parlor first($columns = ['*'])
*/
class ParlorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Parlor::class;
    }
}
