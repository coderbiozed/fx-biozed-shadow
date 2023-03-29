<?php

namespace App\Repositories;

use App\Models\UserReview;
use App\Repositories\BaseRepository;

/**
 * Class UserReviewRepository
 * @package App\Repositories
 * @version March 18, 2021, 6:04 am UTC
*/

class UserReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'broker_id',
        'rating',
        'name',
        'email',
        'title',
        'description',
        'city',
        'country',
        'use_service',
        'service_time',
        'account_no',
        'accept'
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
        return UserReview::class;
    }
}
