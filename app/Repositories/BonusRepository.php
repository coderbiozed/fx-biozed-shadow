<?php

namespace App\Repositories;

use App\Models\Bonus;
use App\Repositories\BaseRepository;

/**
 * Class BonusRepository
 * @package App\Repositories
 * @version March 6, 2023, 6:55 am UTC
*/

class BonusRepository extends BaseRepository
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
        'date',
        'available',
        'requirement',
        'withdrawal',
        'others_condition',
        'info_link',
        'deposit_bonus',
        'welcome_bonus',
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
        return Bonus::class;
    }
}
