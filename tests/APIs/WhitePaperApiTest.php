<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\WhitePaper;

class WhitePaperApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/white_papers', $whitePaper
        );

        $this->assertApiResponse($whitePaper);
    }

    /**
     * @test
     */
    public function test_read_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/white_papers/'.$whitePaper->id
        );

        $this->assertApiResponse($whitePaper->toArray());
    }

    /**
     * @test
     */
    public function test_update_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->create();
        $editedWhitePaper = factory(WhitePaper::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/white_papers/'.$whitePaper->id,
            $editedWhitePaper
        );

        $this->assertApiResponse($editedWhitePaper);
    }

    /**
     * @test
     */
    public function test_delete_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/white_papers/'.$whitePaper->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/white_papers/'.$whitePaper->id
        );

        $this->response->assertStatus(404);
    }
}
