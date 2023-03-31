<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BrokerReview
 * @package App\Models
 * @version March 1, 2021, 5:15 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $compares
 * @property string $main_image
 * @property string $logo_image
 * @property string $shot_description
 * @property string $broker_name
 * @property string $title
 * @property string $info
 * @property string $visit_site
 * @property string $open_live
 * @property string $open_demo
 * @property string $pros
 * @property string $cons
 * @property string $introduction
 * @property string $min_trade
 * @property string $establish
 * @property string $address
 * @property string $contact
 * @property string $regional_ofc
 * @property string $prohibited_countries
 * @property string $max_leverage
 * @property string $trading_platform
 * @property string $web_trading
 * @property string $mob_trading
 * @property string $currencies
 * @property string $cryptocurrencies
 * @property string $cfd
 * @property string $min_open_live
 * @property string $robots
 * @property string $news_spike
 * @property string $scalping
 * @property string $mam
 * @property string $pamm
 * @property string $zulu_trade
 * @property string $deposit_method
 * @property string $withdrawal_method
 * @property string $trading_conditions
 * @property string $products
 * @property string $regulation
 * @property string $platforms
 * @property string $mobile_trading
 * @property string $pricing
 * @property string $deposit_withdrawals
 * @property string $customer_support
 * @property string $research_education
 * @property string $country
 * @property boolean $featured_broker
 * @property boolean $high_leverage
 * @property boolean $asian_broker
 * @property boolean $australian_broker
 * @property boolean $african_broker
 * @property boolean $canadian_broker
 * @property boolean $europian_broker
 * @property boolean $middle_east_broker
 * @property boolean $us_broker
 * @property boolean $uk_broker
 * @property boolean $trading_platform_review
 * @property boolean $publish
 * @property integer $top_broker
 * @property string $slug
 */
class BrokerReview extends Model
{
    use HasFactory;

    public $table = 'broker_review';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'asian_broker',
        'australian_broker',
        'african_broker',
        'canadian_broker',
        'europian_broker',
        'middle_east_broker',
        'us_broker',
        'uk_broker',
        'trading_platform_review',
        'publish',
        'top_broker',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'main_image' => 'string',
        'logo_image' => 'string',
        'shot_description' => 'string',
        'broker_name' => 'string',
        'title' => 'string',
        'info' => 'string',
        'visit_site' => 'string',
        'open_live' => 'string',
        'open_demo' => 'string',
        'pros' => 'string',
        'cons' => 'string',
        'introduction' => 'string',
        'min_trade' => 'string',
        'establish' => 'string',
        'address' => 'string',
        'contact' => 'string',
        'regional_ofc' => 'string',
        'prohibited_countries' => 'string',
        'max_leverage' => 'string',
        'trading_platform' => 'string',
        'web_trading' => 'string',
        'mob_trading' => 'string',
        'currencies' => 'string',
        'cryptocurrencies' => 'string',
        'cfd' => 'string',
        'min_open_live' => 'string',
        'robots' => 'string',
        'news_spike' => 'string',
        'scalping' => 'string',
        'mam' => 'string',
        'pamm' => 'string',
        'zulu_trade' => 'string',
        'deposit_method' => 'string',
        'withdrawal_method' => 'string',
        'trading_conditions' => 'string',
        'products' => 'string',
        'regulation' => 'string',
        'platforms' => 'string',
        'mobile_trading' => 'string',
        'pricing' => 'string',
        'deposit_withdrawals' => 'string',
        'customer_support' => 'string',
        'research_education' => 'string',
        'country' => 'string',
        'featured_broker' => 'boolean',
        'high_leverage' => 'boolean',
        'asian_broker' => 'boolean',
        'australian_broker' => 'boolean',
        'african_broker' => 'boolean',
        'canadian_broker' => 'boolean',
        'europian_broker' => 'boolean',
        'middle_east_broker' => 'boolean',
        'us_broker' => 'boolean',
        'uk_broker' => 'boolean',
        'trading_platform_review' => 'boolean',
        'publish' => 'boolean',
        'top_broker' => 'integer',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'main_image' => 'string',
        'logo_image' => 'string',
        'shot_description' => 'nullable|string',
        'broker_name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'info' => 'nullable|string|max:255',
        'visit_site' => 'nullable|string|max:255',
        'open_live' => 'nullable|string|max:255',
        'open_demo' => 'nullable|string|max:255',
        'pros' => 'nullable|string',
        'cons' => 'nullable|string',
        'introduction' => 'nullable|string',
        'min_trade' => 'nullable|string|max:255',
        'establish' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'contact' => 'nullable|string|max:255',
        'regional_ofc' => 'nullable|string|max:255',
        'prohibited_countries' => 'nullable|string|max:255',
        'max_leverage' => 'nullable|string|max:255',
        'trading_platform' => 'nullable|string|max:255',
        'web_trading' => 'nullable|string|max:255',
        'mob_trading' => 'nullable|string|max:255',
        'currencies' => 'nullable|string|max:255',
        'cryptocurrencies' => 'nullable|string|max:255',
        'cfd' => 'nullable|string|max:255',
        'min_open_live' => 'nullable|string|max:255',
        'robots' => 'nullable|string|max:255',
        'news_spike' => 'nullable|string|max:255',
        'scalping' => 'nullable|string|max:255',
        'mam' => 'nullable|string|max:255',
        'pamm' => 'nullable|string|max:255',
        'zulu_trade' => 'nullable|string|max:255',
        'deposit_method' => 'nullable|string',
        'withdrawal_method' => 'nullable|string',
        'trading_conditions' => 'nullable|string',
        'products' => 'nullable|string',
        'regulation' => 'nullable|string',
        'platforms' => 'nullable|string',
        'mobile_trading' => 'nullable|string',
        'pricing' => 'nullable|string',
        'deposit_withdrawals' => 'nullable|string',
        'customer_support' => 'nullable|string',
        'research_education' => 'nullable|string',
        'country' => 'nullable|string|max:255',
        'featured_broker' => 'nullable|boolean',
        'high_leverage' => 'nullable|boolean',
        'australian_broker' => 'nullable|boolean',
        'trading_platform_review' => 'nullable|boolean',
        'publish' => 'nullable|boolean',
        'top_broker' => 'nullable|integer',
        'slug' => 'string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function compares()
    {
        return $this->hasMany(\App\Models\Compare::class, 'broker_id');
    }
}
