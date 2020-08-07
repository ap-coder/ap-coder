<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTestimonialsAPIRequest;
use App\Http\Requests\API\UpdateTestimonialsAPIRequest;
use App\Testimonials;
use App\Repositories\TestimonialsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TestimonialsController
 * @package App\Http\Controllers\API
 */

class TestimonialsAPIController extends AppBaseController
{
    /** @var  TestimonialsRepository */
    private $testimonialsRepository;

    public function __construct(TestimonialsRepository $testimonialsRepo)
    {
        $this->testimonialsRepository = $testimonialsRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/testimonials",
     *      summary="Get a listing of the Testimonials.",
     *      tags={"Testimonials"},
     *      description="Get all Testimonials",
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
     *                  @SWG\Items(ref="#/definitions/Testimonials")
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
        $testimonials = $this->testimonialsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($testimonials->toArray(), 'Testimonials retrieved successfully');
    }

    /**
     * @param CreateTestimonialsAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/testimonials",
     *      summary="Store a newly created Testimonials in storage",
     *      tags={"Testimonials"},
     *      description="Store Testimonials",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Testimonials that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Testimonials")
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
     *                  ref="#/definitions/Testimonials"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateTestimonialsAPIRequest $request)
    {
        $input = $request->all();

        $testimonials = $this->testimonialsRepository->create($input);

        return $this->sendResponse($testimonials->toArray(), 'Testimonials saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/testimonials/{id}",
     *      summary="Display the specified Testimonials",
     *      tags={"Testimonials"},
     *      description="Get Testimonials",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Testimonials",
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
     *                  ref="#/definitions/Testimonials"
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
        /** @var Testimonials $testimonials */
        $testimonials = $this->testimonialsRepository->find($id);

        if (empty($testimonials)) {
            return $this->sendError('Testimonials not found');
        }

        return $this->sendResponse($testimonials->toArray(), 'Testimonials retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateTestimonialsAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/testimonials/{id}",
     *      summary="Update the specified Testimonials in storage",
     *      tags={"Testimonials"},
     *      description="Update Testimonials",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Testimonials",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Testimonials that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Testimonials")
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
     *                  ref="#/definitions/Testimonials"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateTestimonialsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Testimonials $testimonials */
        $testimonials = $this->testimonialsRepository->find($id);

        if (empty($testimonials)) {
            return $this->sendError('Testimonials not found');
        }

        $testimonials = $this->testimonialsRepository->update($input, $id);

        return $this->sendResponse($testimonials->toArray(), 'Testimonials updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/testimonials/{id}",
     *      summary="Remove the specified Testimonials from storage",
     *      tags={"Testimonials"},
     *      description="Delete Testimonials",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Testimonials",
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
        /** @var Testimonials $testimonials */
        $testimonials = $this->testimonialsRepository->find($id);

        if (empty($testimonials)) {
            return $this->sendError('Testimonials not found');
        }

        $testimonials->delete();

        return $this->sendSuccess('Testimonials deleted successfully');
    }
}
