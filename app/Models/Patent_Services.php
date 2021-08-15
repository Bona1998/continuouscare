<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patent_Services
 * @package App\Models
 * @version July 6, 2021, 12:26 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $image_url
 */
class Patent_Services extends Model
{
    use SoftDeletes;

    public $table = 'patent__services';
    

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
