<?php

namespace App\Repositories;

use App\WhitePaper;
use App\Repositories\BaseRepository;

/**
 * Class WhitePaperRepository
 * @package App\Repositories
 * @version August 6, 2020, 9:06 pm UTC
*/

class WhitePaperRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return WhitePaper::class;
    }
}
