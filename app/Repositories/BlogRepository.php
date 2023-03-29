<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Repositories\BaseRepository;

/**
 * Class BlogRepository
 * @package App\Repositories
 * @version January 28, 2021, 12:46 pm UTC
*/

class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author',
        'title',
        'description',
        'image',
        'slug',
        'top',
        'side',
        'publish',
        'publish_date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Blog::class;
    }
}
