<?php

namespace App\Repositories;

use App\Models\Subscriber;
use App\Repositories\BaseRepository;

/**
 * Class SubscriberRepository
 * @package App\Repositories
 * @version April 2, 2021, 12:26 pm UTC
*/

class SubscriberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email'
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
        return Subscriber::class;
    }
}
