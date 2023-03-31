<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Compare
 * @package App\Models
 * @version February 26, 2021, 5:48 am UTC
 *
 * @property \App\Models\BrokerReview $broker
 * @property integer $broker_id
 * @property string $broker_name
 * @property string $site_link
 * @property string $headquarters
 * @property string $broker_type
 * @property string $founded
 * @property string $regulated
 * @property string $office_in
 * @property string $support_lang
 * @property string $account_currencies
 * @property string $typical_spread
 * @property string $eur_usd
 * @property string $gbp_usd
 * @property string $usd_jpy
 * @property string $min_deposit
 * @property string $max_leverage
 * @property string $min_contact
 * @property string $number_pairs
 * @property boolean $hedging
 * @property boolean $scalping
 * @property boolean $interest_margin
 * @property boolean $islamic_account
 * @property boolean $traders_usa
 * @property boolean $ecn_stp_account
 * @property string $commission_stp
 * @property string $platforms_offered
 * @property boolean $one_click
 * @property boolean $email_alerts
 * @property boolean $mob_alerts
 * @property string $server_time
 * @property string $demo_expiry
 * @property boolean $vps_offered
 * @property boolean $cfd
 * @property boolean $metals
 * @property boolean $oil
 * @property boolean $indices
 * @property boolean $stocks
 * @property boolean $futures
 * @property boolean $binary_options
 * @property string $slug
 */
class Compare extends Model
{
    use HasFactory;

    public $table = 'compare';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'broker_id' => 'integer',
        'broker_name' => 'string',
        'site_link' => 'string',
        'headquarters' => 'string',
        'broker_type' => 'string',
        'founded' => 'string',
        'regulated' => 'string',
        'office_in' => 'string',
        'support_lang' => 'string',
        'account_currencies' => 'string',
        'typical_spread' => 'string',
        'eur_usd' => 'string',
        'gbp_usd' => 'string',
        'usd_jpy' => 'string',
        'min_deposit' => 'string',
        'max_leverage' => 'string',
        'min_contact' => 'string',
        'number_pairs' => 'string',
        'hedging' => 'boolean',
        'scalping' => 'boolean',
        'interest_margin' => 'boolean',
        'islamic_account' => 'boolean',
        'traders_usa' => 'boolean',
        'ecn_stp_account' => 'boolean',
        'commission_stp' => 'string',
        'platforms_offered' => 'string',
        'one_click' => 'boolean',
        'email_alerts' => 'boolean',
        'mob_alerts' => 'boolean',
        'server_time' => 'string',
        'demo_expiry' => 'string',
        'vps_offered' => 'boolean',
        'cfd' => 'boolean',
        'metals' => 'boolean',
        'oil' => 'boolean',
        'indices' => 'boolean',
        'stocks' => 'boolean',
        'futures' => 'boolean',
        'binary_options' => 'boolean',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'broker_id' => 'nullable',
        'broker_name' => 'required|string|max:255',
        'site_link' => 'nullable|string|max:255',
        'headquarters' => 'nullable|string|max:255',
        'broker_type' => 'nullable|string|max:255',
        'founded' => 'nullable|string|max:255',
        'regulated' => 'nullable|string|max:255',
        'office_in' => 'nullable|string|max:255',
        'support_lang' => 'nullable|string|max:255',
        'account_currencies' => 'nullable|string|max:255',
        'typical_spread' => 'nullable|string|max:255',
        'eur_usd' => 'nullable|string|max:255',
        'gbp_usd' => 'nullable|string|max:255',
        'usd_jpy' => 'nullable|string|max:255',
        'min_deposit' => 'nullable|string|max:255',
        'max_leverage' => 'nullable|string|max:255',
        'min_contact' => 'nullable|string|max:255',
        'number_pairs' => 'nullable|string|max:255',
        'hedging' => 'nullable|boolean',
        'scalping' => 'nullable|boolean',
        'interest_margin' => 'nullable|boolean',
        'islamic_account' => 'nullable|boolean',
        'traders_usa' => 'nullable|boolean',
        'ecn_stp_account' => 'nullable|boolean',
        'commission_stp' => 'nullable|string|max:255',
        'platforms_offered' => 'nullable|string',
        'one_click' => 'nullable|boolean',
        'email_alerts' => 'nullable|boolean',
        'mob_alerts' => 'nullable|boolean',
        'server_time' => 'nullable|string|max:255',
        'demo_expiry' => 'nullable|string|max:255',
        'vps_offered' => 'nullable|boolean',
        'cfd' => 'nullable|boolean',
        'metals' => 'nullable|boolean',
        'oil' => 'nullable|boolean',
        'indices' => 'nullable|boolean',
        'stocks' => 'nullable|boolean',
        'futures' => 'nullable|boolean',
        'binary_options' => 'nullable|boolean',
        'slug' => 'string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function broker()
    {
        return $this->belongsTo(\App\Models\BrokerReview::class, 'broker_id');
    }
}
