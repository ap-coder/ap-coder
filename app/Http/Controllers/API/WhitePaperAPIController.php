<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWhitePaperAPIRequest;
use App\Http\Requests\API\UpdateWhitePaperAPIRequest;
use App\WhitePaper;
use App\Repositories\WhitePaperRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class WhitePaperController
 * @package App\Http\Controllers\API
 */

class WhitePaperAPIController extends AppBaseController
{
    /** @var  WhitePaperRepository */
    private $whitePaperRepository;

    public function __construct(WhitePaperRepository $whitePaperRepo)
    {
        $this->whitePaperRepository = $whitePaperRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/whitePapers",
     *      summary="Get a listing of the WhitePapers.",
     *      tags={"WhitePaper"},
     *      description="Get all WhitePapers",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/WhitePaper")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $whitePapers = $this->whitePaperRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($whitePapers->toArray(), 'White Papers retrieved successfully');
    }

    /**
     * @param CreateWhitePaperAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/whitePapers",
     *      summary="Store a newly created WhitePaper in storage",
     *      tags={"WhitePaper"},
     *      description="Store WhitePaper",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="WhitePaper that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/WhitePaper")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/WhitePaper"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateWhitePaperAPIRequest $request)
    {
        $input = $request->all();

        $whitePaper = $this->whitePaperRepository->create($input);

        return $this->sendResponse($whitePaper->toArray(), 'White Paper saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/whitePapers/{id}",
     *      summary="Display the specified WhitePaper",
     *      tags={"WhitePaper"},
     *      description="Get WhitePaper",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of WhitePaper",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/WhitePaper"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            return $this->sendError('White Paper not found');
        }

        return $this->sendResponse($whitePaper->toArray(), 'White Paper retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateWhitePaperAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/whitePapers/{id}",
     *      summary="Update the specified WhitePaper in storage",
     *      tags={"WhitePaper"},
     *      description="Update WhitePaper",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of WhitePaper",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="WhitePaper that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/WhitePaper")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/WhitePaper"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateWhitePaperAPIRequest $request)
    {
        $input = $request->all();

        /** @var WhitePaper $whitePaper */
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            return $this->sendError('White Paper not found');
        }

        $whitePaper = $this->whitePaperRepository->update($input, $id);

        return $this->sendResponse($whitePaper->toArray(), 'WhitePaper updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/whitePapers/{id}",
     *      summary="Remove the specified WhitePaper from storage",
     *      tags={"WhitePaper"},
     *      description="Delete WhitePaper",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of WhitePaper",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            return $this->sendError('White Paper not found');
        }

        $whitePaper->delete();

        return $this->sendSuccess('White Paper deleted successfully');
    }
}
