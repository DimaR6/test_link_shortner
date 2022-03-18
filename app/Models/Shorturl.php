<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Shorturl
 * @package App\Models
 * @version March 18, 2022, 11:52 am UTC
 *
 * @property string $original_url
 * @property string $short_url
 * @property integer $redirect_count
 */
class Shorturl extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'shorturls';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'original_url',
        'short_url',
        'redirect_count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'original_url' => 'string',
        'short_url' => 'string',
        'redirect_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'original_url' => 'nullable|string',
        'short_url' => 'nullable|string',
        'redirect_count' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
