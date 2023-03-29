<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Seo
 * @package App\Models
 * @version February 18, 2021, 4:53 am UTC
 *
 * @property string $title
 * @property string $description
 * @property string $keyword
 * @property string $url
 */
class Seo extends Model
{
    use HasFactory;

    public $table = 'seo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'keyword',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'keyword' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'keyword' => 'required|string|max:255',
        'url' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
