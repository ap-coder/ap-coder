<?php

namespace App;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * https://github.com/digit-soft/laravel-swagger-generator
 * https://quickadminpanel.com/blog/laravel-api-documentation-with-openapiswagger/#comment-74740
 * https://whoisryosuke.com/blog/2018/adding-auto-generated-docs-to-laravel-api-kushy/
 * @OA\Definition(
 *      definition="Testimonial",
 *      required={"title", "body", "rating"},
 *      @OA\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @OA\Property(
 *          property="body",
 *          description="body",
 *          type="string"
 *      ),
 *      @OA\Property(
 *          property="website",
 *          description="website",
 *          type="string"
 *      ),
 *      @OA\Property(
 *          property="rating",
 *          description="rating",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="published",
 *          description="published",
 *          type="boolean"
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="status_id",
 *          description="status_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Testimonial extends Model
{
    use SoftDeletes;

    public $table = 'testimonials';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'body',
        'website',
        'rating',
        'published',
        'status_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'body' => 'string',
        'website' => 'string',
        'rating' => 'integer',
        'published' => 'boolean',
        'status_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'rating' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Status::class, 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function products()
    {
        return $this->belongsToMany(\App\Product::class, 'product_testimonial');
    }
}
