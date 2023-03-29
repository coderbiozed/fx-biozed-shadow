<?php

namespace App\Repositories;

use App\Models\Contests;
use App\Repositories\BaseRepository;

/**
 * Class ContestsRepository
 * @package App\Repositories
 * @version March 9, 2023, 11:18 am UTC
*/

class ContestsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'broker_id',
        'title',
        'description',
        'bonus',
        'link',
        'prize_fund',
        'no_of_places',
        'contest_duration',
        'status',
        'no_of_participants',
        'info_link',
        'demo_contests',
        'live_contests',
        'publish'
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
        return Contests::class;
    }
}
