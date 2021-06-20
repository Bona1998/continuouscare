<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class about
 * @package App\Models
 * @version June 19, 2021, 8:00 am UTC
 *
 * @property string $aboutName
 * @property string $aboutContent
 */
class about extends Model
{
    use SoftDeletes;

    public $table = 'abouts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'aboutName',
        'aboutContent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aboutName' => 'string',
        'aboutContent' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'aboutName' => 'required',
        'aboutContent' => 'required'
    ];

    
}
