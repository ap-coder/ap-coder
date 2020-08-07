<?php namespace Tests\Repositories;

use App\Testimonials;
use App\Repositories\TestimonialsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TestimonialsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TestimonialsRepository
     */
    protected $testimonialsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->testimonialsRepo = \App::make(TestimonialsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_testimonials()
    {
        $testimonials = factory(Testimonials::class)->make()->toArray();

        $createdTestimonials = $this->testimonialsRepo->create($testimonials);

        $createdTestimonials = $createdTestimonials->toArray();
        $this->assertArrayHasKey('id', $createdTestimonials);
        $this->assertNotNull($createdTestimonials['id'], 'Created Testimonials must have id specified');
        $this->assertNotNull(Testimonials::find($createdTestimonials['id']), 'Testimonials with given id must be in DB');
        $this->assertModelData($testimonials, $createdTestimonials);
    }

    /**
     * @test read
     */
    public function test_read_testimonials()
    {
        $testimonials = factory(Testimonials::class)->create();

        $dbTestimonials = $this->testimonialsRepo->find($testimonials->id);

        $dbTestimonials = $dbTestimonials->toArray();
        $this->assertModelData($testimonials->toArray(), $dbTestimonials);
    }

    /**
     * @test update
     */
    public function test_update_testimonials()
    {
        $testimonials = factory(Testimonials::class)->create();
        $fakeTestimonials = factory(Testimonials::class)->make()->toArray();

        $updatedTestimonials = $this->testimonialsRepo->update($fakeTestimonials, $testimonials->id);

        $this->assertModelData($fakeTestimonials, $updatedTestimonials->toArray());
        $dbTestimonials = $this->testimonialsRepo->find($testimonials->id);
        $this->assertModelData($fakeTestimonials, $dbTestimonials->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_testimonials()
    {
        $testimonials = factory(Testimonials::class)->create();

        $resp = $this->testimonialsRepo->delete($testimonials->id);

        $this->assertTrue($resp);
        $this->assertNull(Testimonials::find($testimonials->id), 'Testimonials should not exist in DB');
    }
}
