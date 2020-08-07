<?php

namespace App\Repositories;

use App\Products;
use App\Repositories\BaseRepository;

/**
 * Class ProductsRepository
 * @package App\Repositories
 * @version August 6, 2020, 9:51 pm UTC
*/

class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'short',
        'demo_request_link',
        'demo_form',
        'slug',
        'type',
        'chicklet',
        'published',
        'meta_title',
        'meta_description',
        'facebook_title',
        'facebook_desc',
        'twitter_post_title',
        'twitter_post_description',
        'status_id',
        'industries_id'
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
        return Products::class;
    }
}
