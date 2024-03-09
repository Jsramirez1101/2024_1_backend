<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Photo_details",
 *      required={"gps_location","status"},
 *      @OA\Property(
 *          property="gps_location",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="status",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="description",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
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
 */class Photo_details extends Model
{
    public $table = 'photo_details';

    public $fillable = [
        'gps_location',
        'status',
        'description'
    ];

    protected $casts = [
        'gps_location' => 'string',
        'status' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'gps_location' => 'required',
        'status' => 'required',
        'description' => 'nullable'
    ];

    
}
