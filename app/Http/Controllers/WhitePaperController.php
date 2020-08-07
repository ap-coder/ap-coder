<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWhitePaperRequest;
use App\Http\Requests\UpdateWhitePaperRequest;
use App\Repositories\WhitePaperRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WhitePaperController extends AppBaseController
{
    /** @var  WhitePaperRepository */
    private $whitePaperRepository;

    public function __construct(WhitePaperRepository $whitePaperRepo)
    {
        $this->whitePaperRepository = $whitePaperRepo;
    }

    /**
     * Display a listing of the WhitePaper.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $whitePapers = $this->whitePaperRepository->all();

        return view('white_papers.index')
            ->with('whitePapers', $whitePapers);
    }

    /**
     * Show the form for creating a new WhitePaper.
     *
     * @return Response
     */
    public function create()
    {
        return view('white_papers.create');
    }

    /**
     * Store a newly created WhitePaper in storage.
     *
     * @param CreateWhitePaperRequest $request
     *
     * @return Response
     */
    public function store(CreateWhitePaperRequest $request)
    {
        $input = $request->all();

        $whitePaper = $this->whitePaperRepository->create($input);

        Flash::success('White Paper saved successfully.');

        return redirect(route('whitePapers.index'));
    }

    /**
     * Display the specified WhitePaper.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        return view('white_papers.show')->with('whitePaper', $whitePaper);
    }

    /**
     * Show the form for editing the specified WhitePaper.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        return view('white_papers.edit')->with('whitePaper', $whitePaper);
    }

    /**
     * Update the specified WhitePaper in storage.
     *
     * @param int $id
     * @param UpdateWhitePaperRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWhitePaperRequest $request)
    {
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        $whitePaper = $this->whitePaperRepository->update($request->all(), $id);

        Flash::success('White Paper updated successfully.');

        return redirect(route('whitePapers.index'));
    }

    /**
     * Remove the specified WhitePaper from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $whitePaper = $this->whitePaperRepository->find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        $this->whitePaperRepository->delete($id);

        Flash::success('White Paper deleted successfully.');

        return redirect(route('whitePapers.index'));
    }
}
