<?php namespace Tests\Repositories;

use App\WhitePaper;
use App\Repositories\WhitePaperRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class WhitePaperRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var WhitePaperRepository
     */
    protected $whitePaperRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->whitePaperRepo = \App::make(WhitePaperRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->make()->toArray();

        $createdWhitePaper = $this->whitePaperRepo->create($whitePaper);

        $createdWhitePaper = $createdWhitePaper->toArray();
        $this->assertArrayHasKey('id', $createdWhitePaper);
        $this->assertNotNull($createdWhitePaper['id'], 'Created WhitePaper must have id specified');
        $this->assertNotNull(WhitePaper::find($createdWhitePaper['id']), 'WhitePaper with given id must be in DB');
        $this->assertModelData($whitePaper, $createdWhitePaper);
    }

    /**
     * @test read
     */
    public function test_read_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->create();

        $dbWhitePaper = $this->whitePaperRepo->find($whitePaper->id);

        $dbWhitePaper = $dbWhitePaper->toArray();
        $this->assertModelData($whitePaper->toArray(), $dbWhitePaper);
    }

    /**
     * @test update
     */
    public function test_update_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->create();
        $fakeWhitePaper = factory(WhitePaper::class)->make()->toArray();

        $updatedWhitePaper = $this->whitePaperRepo->update($fakeWhitePaper, $whitePaper->id);

        $this->assertModelData($fakeWhitePaper, $updatedWhitePaper->toArray());
        $dbWhitePaper = $this->whitePaperRepo->find($whitePaper->id);
        $this->assertModelData($fakeWhitePaper, $dbWhitePaper->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_white_paper()
    {
        $whitePaper = factory(WhitePaper::class)->create();

        $resp = $this->whitePaperRepo->delete($whitePaper->id);

        $this->assertTrue($resp);
        $this->assertNull(WhitePaper::find($whitePaper->id), 'WhitePaper should not exist in DB');
    }
}
