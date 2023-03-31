<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Traders
 * @package App\Models
 * @version March 1, 2023, 11:01 am UTC
 *
 * @property string $image
 * @property string $trader
 * @property string $lifespan
 * @property string $trader_share
 * @property string $Profitability
 * @property string $equity
 * @property string $copying_traders
 */
class Traders extends Model
{
    

    use HasFactory;

    public $table = 'traders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'trader',
        'lifespan',
        'trader_share',
        'Profitability',
        'equity',
        'copying_traders'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'trader' => 'string',
        'lifespan' => 'string',
        'trader_share' => 'string',
        'Profitability' => 'string',
        'equity' => 'string',
        'copying_traders' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'nullable|string|max:255',
        'trader' => 'nullable|string|max:255',
        'lifespan' => 'nullable|string|max:255',
        'trader_share' => 'nullable|string|max:255',
        'Profitability' => 'nullable|string|max:255',
        'equity' => 'nullable|string|max:255',
        'copying_traders' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
