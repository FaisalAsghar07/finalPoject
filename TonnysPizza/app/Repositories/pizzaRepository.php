<?php

namespace App\Repositories;

use App\Models\pizza;
use App\Repositories\BaseRepository;

/**
 * Class pizzaRepository
 * @package App\Repositories
 * @version April 25, 2024, 2:53 pm UTC
*/

class pizzaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'price'
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
        return pizza::class;
    }
}
