<?php

namespace App\Repositories;

use App\Models\about;
use App\Repositories\BaseRepository;

/**
 * Class aboutRepository
 * @package App\Repositories
 * @version June 19, 2021, 8:00 am UTC
*/

class aboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aboutName',
        'aboutContent'
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
        return about::class;
    }
}
