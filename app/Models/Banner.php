<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Banner
 * @package App\Models
 * @version April 1, 2021, 4:59 am UTC
 *
 * @property string $banner
 * @property string $image
 * @property string $image_link
 */
class Banner extends Model
{
    use HasFactory;

    public $table = 'banner';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'banner',
        'image',
        'image_link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'banner' => 'string',
        'image' => 'string',
        'image_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'banner' => 'required|string|max:255',
        'image' => 'string',
        'image_link' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
