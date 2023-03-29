<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bonus
 * @package App\Models
 * @version March 6, 2023, 6:55 am UTC
 *
 * @property \App\Models\BrokerReview $broker
 * @property integer $broker_id
 * @property string $title
 * @property string $description
 * @property string $bonus
 * @property string $link
 * @property string $date
 * @property string $available
 * @property string $requirement
 * @property string $withdrawal
 * @property string $others_condition
 * @property string $info_link
 * @property boolean $deposit_bonus
 * @property boolean $welcome_bonus
 * @property boolean $publish
 */
class Bonus extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'bonus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'date' => 'string',
        'available' => 'string',
        'requirement' => 'string',
        'withdrawal' => 'string',
        'others_condition' => 'string',
        'info_link' => 'string',
        'deposit_bonus' => 'boolean',
        'welcome_bonus' => 'boolean',
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
        'date' => 'nullable|string|max:255',
        'available' => 'nullable|string|max:255',
        'requirement' => 'nullable|string|max:255',
        'withdrawal' => 'nullable|string|max:255',
        'others_condition' => 'nullable|string|max:255',
        'info_link' => 'nullable|string|max:255',
        'deposit_bonus' => 'nullable|boolean',
        'welcome_bonus' => 'nullable|boolean',
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
