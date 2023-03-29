<?php

namespace App\Repositories;

use App\Models\BrokerReview;
use App\Repositories\BaseRepository;

/**
 * Class BrokerReviewRepository
 * @package App\Repositories
 * @version March 1, 2021, 5:15 am UTC
*/

class BrokerReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'main_image',
        'logo_image',
        'shot_description',
        'broker_name',
        'title',
        'info',
        'visit_site',
        'open_live',
        'open_demo',
        'pros',
        'cons',
        'introduction',
        'min_trade',
        'establish',
        'address',
        'contact',
        'regional_ofc',
        'prohibited_countries',
        'max_leverage',
        'trading_platform',
        'web_trading',
        'mob_trading',
        'currencies',
        'cryptocurrencies',
        'cfd',
        'min_open_live',
        'robots',
        'news_spike',
        'scalping',
        'mam',
        'pamm',
        'zulu_trade',
        'deposit_method',
        'withdrawal_method',
        'trading_conditions',
        'products',
        'regulation',
        'platforms',
        'mobile_trading',
        'pricing',
        'deposit_withdrawals',
        'customer_support',
        'research_education',
        'country',
        'featured_broker',
        'high_leverage',
        'australian_broker',
        'trading_platform_review',
        'publish',
        'top_broker',
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
        return BrokerReview::class;
    }
}
