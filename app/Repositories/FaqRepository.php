<?php

namespace App\Repositories;

use App\Models\Faq;
use App\Repositories\BaseRepository;

/**
 * Class FaqRepository
 * @package App\Repositories
 * @version March 22, 2021, 10:30 am UTC
*/

class FaqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'broker_id',
        'q_1',
        'ans_1',
        'q_2',
        'ans_2',
        'q_3',
        'ans_3',
        'q_4',
        'ans_4',
        'q_5',
        'ans_5',
        'q_6',
        'ans_6',
        'q_7',
        'ans_7',
        'q_8',
        'ans_8',
        'q_9',
        'ans_9',
        'q_10',
        'ans_10'
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
        return Faq::class;
    }
}
