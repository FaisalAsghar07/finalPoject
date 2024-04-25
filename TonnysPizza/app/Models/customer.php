<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class customer
 * @package App\Models
 * @version April 25, 2024, 2:52 pm UTC
 *
 * @property string $name
 * @property string $phone_number
 * @property string $address
 * @property integer $order_id
 */
class customer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'phone_number',
        'address',
        'order_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone_number' => 'string',
        'address' => 'string',
        'order_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:50',
        'phone_number' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:100',
        'order_id' => 'nullable|integer'
    ];

    
}
