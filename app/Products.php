<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Products",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="short",
 *          description="short",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="demo_request_link",
 *          description="demo_request_link",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="demo_form",
 *          description="demo_form",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="chicklet",
 *          description="chicklet",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="published",
 *          description="published",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="meta_title",
 *          description="meta_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_description",
 *          description="meta_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook_title",
 *          description="facebook_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook_desc",
 *          description="facebook_desc",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="twitter_post_title",
 *          description="twitter_post_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="twitter_post_description",
 *          description="twitter_post_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="status_id",
 *          description="status_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="industries_id",
 *          description="industries_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'short',
        'demo_request_link',
        'demo_form',
        'slug',
        'type',
        'chicklet',
        'published',
        'meta_title',
        'meta_description',
        'facebook_title',
        'facebook_desc',
        'twitter_post_title',
        'twitter_post_description',
        'status_id',
        'industries_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'short' => 'string',
        'demo_request_link' => 'string',
        'demo_form' => 'string',
        'slug' => 'string',
        'type' => 'string',
        'chicklet' => 'string',
        'published' => 'boolean',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'facebook_title' => 'string',
        'facebook_desc' => 'string',
        'twitter_post_title' => 'string',
        'twitter_post_description' => 'string',
        'status_id' => 'integer',
        'industries_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function industries()
    {
        return $this->belongsTo(\App\Industry::class, 'industries_id');
    }

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
    public function caseStudies()
    {
        return $this->belongsToMany(\App\CaseStudy::class, 'case_study_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function docs()
    {
        return $this->belongsToMany(\App\Doc::class, 'doc_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function faqQuestions()
    {
        return $this->belongsToMany(\App\FaqQuestion::class, 'faq_question_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function features()
    {
        return $this->belongsToMany(\App\Feature::class, 'feature_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function firmware()
    {
        return $this->belongsToMany(\App\Firmware::class, 'firmware_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function infographics()
    {
        return $this->belongsToMany(\App\Infographic::class, 'infographic_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function lessons()
    {
        return $this->belongsToMany(\App\Lesson::class, 'lesson_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function news()
    {
        return $this->belongsToMany(\App\News::class, 'news_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function posts()
    {
        return $this->belongsToMany(\App\Post::class, 'post_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productCategories()
    {
        return $this->belongsToMany(\App\ProductCategory::class, 'product_product_category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productModels()
    {
        return $this->belongsToMany(\App\ProductModel::class, 'product_product_model');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productSections()
    {
        return $this->belongsToMany(\App\ProductSection::class, 'product_product_section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productTags()
    {
        return $this->belongsToMany(\App\ProductTag::class, 'product_product_tag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function qrs()
    {
        return $this->belongsToMany(\App\Qr::class, 'product_qr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function software()
    {
        return $this->belongsToMany(\App\Software::class, 'product_software');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function testimonials()
    {
        return $this->belongsToMany(\App\Testimonial::class, 'product_testimonial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function whitePapers()
    {
        return $this->belongsToMany(\App\WhitePaper::class, 'product_white_paper');
    }
}
