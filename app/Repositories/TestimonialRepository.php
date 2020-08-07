<?php

namespace App\Repositories;

use App\Testimonial;
use App\Repositories\BaseRepository;

/**
 * Class TestimonialRepository
 * @package App\Repositories
 * @version August 4, 2020, 1:19 am UTC
*/

class TestimonialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'website',
        'rating',
        'published',
        'status_id'
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
        return Testimonial::class;
    }
}
