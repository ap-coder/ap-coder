<?php

namespace App\Repositories;

use App\Doc;
use App\Repositories\BaseRepository;

/**
 * Class DocRepository
 * @package App\Repositories
 * @version August 4, 2020, 1:07 am UTC
*/

class DocRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'set_name',
        'industry',
        'published',
        'slug',
        'config_catalog_filter',
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
        return Doc::class;
    }
}
