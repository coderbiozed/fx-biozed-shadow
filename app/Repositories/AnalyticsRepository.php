<?php

namespace App\Repositories;

use App\Models\Analytics;
use App\Repositories\BaseRepository;

/**
 * Class AnalyticsRepository
 * @package App\Repositories
 * @version May 5, 2021, 8:11 am UTC
*/

class AnalyticsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'analytics_code'
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
        return Analytics::class;
    }
}
