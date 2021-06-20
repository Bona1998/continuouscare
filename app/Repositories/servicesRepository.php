<?php

namespace App\Repositories;

use App\Models\services;
use App\Repositories\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version June 17, 2021, 9:54 am UTC
*/

class servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'descption'
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
        return services::class;
    }
}
