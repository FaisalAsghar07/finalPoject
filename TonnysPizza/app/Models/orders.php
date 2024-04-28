<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class orders
 * @package App\Models
 * @version April 25, 2024, 3:00 pm UTC
 *
 * @property integer $customer_id
 * @property integer $pizza_id
 * @property integer $driver_id
 * @property string|\Carbon\Carbon $order_date
 * @property string|\Carbon\Carbon $delivery_date
 */
class orders extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer_id',
        'pizza_id',
        'driver_id',
        'order_date',
        'delivery_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'pizza_id' => 'integer',
        'driver_id' => 'integer',
        'order_date' => 'datetime',
        'delivery_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'nullable|integer',
        'pizza_id' => 'nullable|integer',
        'driver_id' => 'nullable|integer',
        'order_date' => 'nullable',
        'delivery_date' => 'nullable'
    ];

    
}
