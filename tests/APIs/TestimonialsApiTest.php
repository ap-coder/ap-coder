<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Testimonials;

class TestimonialsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_testimonials()
    {
        $testimonials = factory(Testimonials::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/testimonials', $testimonials
        );

        $this->assertApiResponse($testimonials);
    }

    /**
     * @test
     */
    public function test_read_testimonials()
    {
        $testimonials = factory(Testimonials::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/testimonials/'.$testimonials->id
        );

        $this->assertApiResponse($testimonials->toArray());
    }

    /**
     * @test
     */
    public function test_update_testimonials()
    {
        $testimonials = factory(Testimonials::class)->create();
        $editedTestimonials = factory(Testimonials::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/testimonials/'.$testimonials->id,
            $editedTestimonials
        );

        $this->assertApiResponse($editedTestimonials);
    }

    /**
     * @test
     */
    public function test_delete_testimonials()
    {
        $testimonials = factory(Testimonials::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/testimonials/'.$testimonials->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/testimonials/'.$testimonials->id
        );

        $this->response->assertStatus(404);
    }
}
