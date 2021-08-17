<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BrifDescription
 * @package App\Models
 * @version July 4, 2021, 2:45 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $image_url
 */
class BrifDescription extends Model
{
    use SoftDeletes;

    public $table = 'brif_descriptions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'image_url'
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
        'image_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
