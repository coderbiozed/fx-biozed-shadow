<?php

namespace App\Repositories;

use App\Models\Banner;
use App\Repositories\BaseRepository;

/**
 * Class BannerRepository
 * @package App\Repositories
 * @version April 1, 2021, 4:59 am UTC
*/

class BannerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'banner',
        'image',
        'image_link'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Banner::class;
    }
}
