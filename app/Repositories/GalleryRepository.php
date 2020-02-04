<?php

namespace App\Repositories;

use App\Models\Gallery;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GalleryRepository
 * @package App\Repositories
 * @version July 28, 2019, 6:46 pm PKT
 *
 * @method Gallery findWithoutFail($id, $columns = ['*'])
 * @method Gallery find($id, $columns = ['*'])
 * @method Gallery first($columns = ['*'])
*/
class GalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'image',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gallery::class;
    }
}
