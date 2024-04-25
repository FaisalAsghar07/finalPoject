<?php

namespace App\Repositories;

use App\Models\customer;
use App\Repositories\BaseRepository;

/**
 * Class customerRepository
 * @package App\Repositories
 * @version April 25, 2024, 2:52 pm UTC
*/

class customerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone_number',
        'address',
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
        return customer::class;
    }
}
