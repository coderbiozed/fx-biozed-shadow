<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Blog
 * @package App\Models
 * @version January 28, 2021, 12:46 pm UTC
 *
 * @property string $author
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $slug
 * @property boolean $top
 * @property boolean $side
 * @property boolean $publish
 * @property string $publish_date
 */
class Blog extends Model
{
    use HasFactory;

    public $table = 'blog';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'author',
        'title',
        'short_description',
        'description',
        'image',
        'slug',
        'top',
        'side',
        'publish',
        'publish_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author' => 'string',
        'title' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'image' => 'string',
        'slug' => 'string',
        'top' => 'boolean',
        'side' => 'boolean',
        'publish' => 'boolean',
        'publish_date' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'short_description' => 'required|string',
        'description' => 'required|string',
        'image' => 'string',
        'slug' => 'string|max:255',
        'top' => 'nullable|boolean',
        'side' => 'nullable|boolean',
        'publish' => 'nullable|boolean',
        'publish_date' => 'string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
