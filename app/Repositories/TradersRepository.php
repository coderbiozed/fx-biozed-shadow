<?php

namespace App\Repositories;

use App\Models\Traders;
use App\Repositories\BaseRepository;

/**
 * Class TradersRepository
 * @package App\Repositories
 * @version March 1, 2023, 11:01 am UTC
*/

class TradersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'trader',
        'lifespan',
        'trader_share',
        'Profitability',
        'equity',
        'copying_traders'
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
        return Traders::class;
    }
}
