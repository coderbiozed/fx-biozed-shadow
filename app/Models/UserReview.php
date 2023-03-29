<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserReview
 * @package App\Models
 * @version March 18, 2021, 6:04 am UTC
 *
 * @property \App\Models\BrokerReview $broker
 * @property integer $broker_id
 * @property integer $rating
 * @property string $name
 * @property string $email
 * @property string $title
 * @property string $description
 * @property string $city
 * @property string $country
 * @property string $use_service
 * @property string $service_time
 * @property string $account_no
 * @property boolean $accept
 */
class UserReview extends Model
{
    use HasFactory;

    public $table = 'user_review';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'broker_id',
        'rating',
        'name',
        'email',
        'title',
        'description',
        'city',
        'country',
        'use_service',
        'service_time',
        'account_no',
        'accept'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'broker_id' => 'integer',
        'rating' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'title' => 'string',
        'description' => 'string',
        'city' => 'string',
        'country' => 'string',
        'use_service' => 'string',
        'service_time' => 'string',
        'account_no' => 'string',
        'accept' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'broker_id' => 'required',
        'rating' => 'required|integer',
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'city' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'use_service' => 'nullable|string|max:255',
        'service_time' => 'nullable|string|max:255',
        'account_no' => 'nullable|string|max:255',
        'accept' => 'required|boolean',
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
