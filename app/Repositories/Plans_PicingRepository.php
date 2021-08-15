<?php

namespace App\Repositories;

use App\Models\Plans_Picing;
use App\Repositories\BaseRepository;

/**
 * Class Plans_PicingRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:24 am UTC
*/

class Plans_PicingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'offer_type',
        'annually_pric',
        'monthly_price',
        'offer'
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
        return Plans_Picing::class;
    }

    
}
