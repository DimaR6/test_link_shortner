<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Shorturl
 * @package App\Models
 * @version March 18, 2022, 12:08 pm UTC
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
        'original_url' => 'required|string|min:20|max:1000',
    ];

}
