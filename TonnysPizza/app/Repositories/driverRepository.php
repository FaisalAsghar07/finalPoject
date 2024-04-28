<?php

namespace App\Repositories;

use App\Models\driver;
use App\Repositories\BaseRepository;

/**
 * Class driverRepository
 * @package App\Repositories
 * @version April 25, 2024, 2:59 pm UTC
*/

class driverRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone_number',
        'order_id'
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
        return driver::class;
    }
}
