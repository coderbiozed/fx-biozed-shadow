<?php

namespace App\Repositories;

use App\Models\Compare;
use App\Repositories\BaseRepository;

/**
 * Class CompareRepository
 * @package App\Repositories
 * @version February 26, 2021, 5:48 am UTC
*/

class CompareRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'broker_id',
        'broker_name',
        'site_link',
        'headquarters',
        'broker_type',
        'founded',
        'regulated',
        'office_in',
        'support_lang',
        'account_currencies',
        'typical_spread',
        'eur_usd',
        'gbp_usd',
        'usd_jpy',
        'min_deposit',
        'max_leverage',
        'min_contact',
        'number_pairs',
        'hedging',
        'scalping',
        'interest_margin',
        'islamic_account',
        'traders_usa',
        'ecn_stp_account',
        'commission_stp',
        'platforms_offered',
        'one_click',
        'email_alerts',
        'mob_alerts',
        'server_time',
        'demo_expiry',
        'vps_offered',
        'cfd',
        'metals',
        'oil',
        'indices',
        'stocks',
        'futures',
        'binary_options',
        'slug'
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
        return Compare::class;
    }
}
