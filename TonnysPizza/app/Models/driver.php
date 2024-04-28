<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class driver
 * @package App\Models
 * @version April 25, 2024, 2:59 pm UTC
 *
 * @property string $name
 * @property string $phone_number
 * @property integer $order_id
 */
class driver extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'driver';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'phone_number',
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
        'order_id' => 'nullable|integer'
    ];

    
}
