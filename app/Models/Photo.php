<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Photo",
 *      required={"String"},
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Photo extends Model
{
    public $table = 'photos';

    public $fillable = [
        'user_id',
        'photo_details_id',
        'String'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'user_id' => 'oneDelete',
        'photo_details_id' => 'oneDelete',
        'String' => 'required'
    ];

    
}
