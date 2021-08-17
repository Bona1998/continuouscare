<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reviwes
 * @package App\Models
 * @version July 4, 2021, 3:32 pm UTC
 *
 * @property string $name
 * @property string $jop_description
 * @property string $what_say
 * @property string $image_url
 */
class Reviwes extends Model
{
    use SoftDeletes;

    public $table = 'reviwes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'jop_description',
        'what_say',
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
        'jop_description' => 'string',
        'what_say' => 'string',
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
