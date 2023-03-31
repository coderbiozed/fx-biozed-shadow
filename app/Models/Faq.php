<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Faq
 * @package App\Models
 * @version March 22, 2021, 10:30 am UTC
 *
 * @property \App\Models\BrokerReview $broker
 * @property integer $broker_id
 * @property string $q_1
 * @property string $ans_1
 * @property string $q_2
 * @property string $ans_2
 * @property string $q_3
 * @property string $ans_3
 * @property string $q_4
 * @property string $ans_4
 * @property string $q_5
 * @property string $ans_5
 * @property string $q_6
 * @property string $ans_6
 * @property string $q_7
 * @property string $ans_7
 * @property string $q_8
 * @property string $ans_8
 * @property string $q_9
 * @property string $ans_9
 * @property string $q_10
 * @property string $ans_10
 */
class Faq extends Model
{
    use HasFactory;

    public $table = 'faq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'broker_id' => 'integer',
        'q_1' => 'string',
        'ans_1' => 'string',
        'q_2' => 'string',
        'ans_2' => 'string',
        'q_3' => 'string',
        'ans_3' => 'string',
        'q_4' => 'string',
        'ans_4' => 'string',
        'q_5' => 'string',
        'ans_5' => 'string',
        'q_6' => 'string',
        'ans_6' => 'string',
        'q_7' => 'string',
        'ans_7' => 'string',
        'q_8' => 'string',
        'ans_8' => 'string',
        'q_9' => 'string',
        'ans_9' => 'string',
        'q_10' => 'string',
        'ans_10' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'broker_id' => 'nullable',
        'q_1' => 'nullable|string|max:255',
        'ans_1' => 'nullable|string',
        'q_2' => 'nullable|string|max:255',
        'ans_2' => 'nullable|string',
        'q_3' => 'nullable|string|max:255',
        'ans_3' => 'nullable|string',
        'q_4' => 'nullable|string|max:255',
        'ans_4' => 'nullable|string',
        'q_5' => 'nullable|string|max:255',
        'ans_5' => 'nullable|string',
        'q_6' => 'nullable|string|max:255',
        'ans_6' => 'nullable|string',
        'q_7' => 'nullable|string|max:255',
        'ans_7' => 'nullable|string',
        'q_8' => 'nullable|string|max:255',
        'ans_8' => 'nullable|string',
        'q_9' => 'nullable|string|max:255',
        'ans_9' => 'nullable|string',
        'q_10' => 'nullable|string|max:255',
        'ans_10' => 'nullable|string',
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
