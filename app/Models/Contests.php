<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contests
 * @package App\Models
 * @version March 9, 2023, 11:18 am UTC
 *
 * @property \App\Models\BrokerReview $broker
 * @property integer $broker_id
 * @property string $title
 * @property string $description
 * @property string $bonus
 * @property string $link
 * @property string $prize_fund
 * @property string $no_of_places
 * @property string $contest_duration
 * @property string $status
 * @property string $no_of_participants
 * @property string $info_link
 * @property boolean $demo_contests
 * @property boolean $live_contests
 * @property boolean $publish
 */
class Contests extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'contests';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'broker_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'bonus' => 'string',
        'link' => 'string',
        'prize_fund' => 'string',
        'no_of_places' => 'string',
        'contest_duration' => 'string',
        'status' => 'string',
        'no_of_participants' => 'string',
        'info_link' => 'string',
        'demo_contests' => 'boolean',
        'live_contests' => 'boolean',
        'publish' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'broker_id' => 'nullable',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'bonus' => 'nullable|string|max:255',
        'link' => 'nullable|string|max:255',
        'prize_fund' => 'nullable|string|max:255',
        'no_of_places' => 'nullable|string|max:255',
        'contest_duration' => 'nullable|string|max:255',
        'status' => 'nullable|string|max:255',
        'no_of_participants' => 'nullable|string|max:255',
        'info_link' => 'nullable|string|max:255',
        'demo_contests' => 'nullable|boolean',
        'live_contests' => 'nullable|boolean',
        'publish' => 'nullable|boolean',
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
