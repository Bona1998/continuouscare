<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Plans_Picing
 * @package App\Models
 * @version July 6, 2021, 11:24 am UTC
 *
 * @property string $offer_type
 * @property string $annually_pric
 * @property string $monthly_price
 * @property string $offer
 */
class Plans_Picing extends Model
{
    use SoftDeletes;

    public $table = 'plans__picings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'offer_type',
        'annually_pric',
        'monthly_price',
        'offer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'offer_type' => 'string',
        'annually_pric' => 'string',
        'monthly_price' => 'string',
        'offer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
