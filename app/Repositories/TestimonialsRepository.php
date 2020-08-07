<?php

namespace App\Repositories;

use App\Testimonials;
use App\Repositories\BaseRepository;

/**
 * Class TestimonialsRepository
 * @package App\Repositories
 * @version August 6, 2020, 9:49 pm UTC
*/

class TestimonialsRepository extends BaseRepository
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
        return Testimonials::class;
    }
}
