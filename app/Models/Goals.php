<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Goals
 * @package App\Models
 * @version July 4, 2021, 3:34 pm UTC
 *
 * @property string $name
 * @property string $discription
 * @property string $image_url
 */
class Goals extends Model
{
    use SoftDeletes;

    public $table = 'goals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'discription',
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
        'discription' => 'string',
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
