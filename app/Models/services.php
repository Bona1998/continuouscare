<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services
 * @package App\Models
 * @version June 17, 2021, 9:54 am UTC
 *
 * @property string $name
 * @property string $descption
 */
class services extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'descption'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'descption' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'descption' => 'required'
    ];

    
}
