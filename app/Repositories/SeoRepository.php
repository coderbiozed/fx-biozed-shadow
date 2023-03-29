<?php

namespace App\Repositories;

use App\Models\Seo;
use App\Repositories\BaseRepository;

/**
 * Class SeoRepository
 * @package App\Repositories
 * @version February 18, 2021, 4:53 am UTC
*/

class SeoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'keyword',
        'url'
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
        return Seo::class;
    }
}
