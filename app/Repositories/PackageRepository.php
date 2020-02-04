<?php

namespace App\Repositories;

use App\Models\Package;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PackageRepository
 * @package App\Repositories
 * @version July 28, 2019, 7:23 am PKT
 *
 * @method Package findWithoutFail($id, $columns = ['*'])
 * @method Package find($id, $columns = ['*'])
 * @method Package first($columns = ['*'])
*/
class PackageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'image',
        'category_id',
        'parlor_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Package::class;
    }
}
