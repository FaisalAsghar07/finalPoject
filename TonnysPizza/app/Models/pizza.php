<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pizza
 * @package App\Models
 * @version April 25, 2024, 2:53 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property number $price
 */
class pizza extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pizza';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:50',
        'description' => 'nullable|string|max:255',
        'price' => 'nullable|numeric'
    ];

    
}
