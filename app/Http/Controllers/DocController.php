<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocRequest;
use App\Http\Requests\UpdateDocRequest;
use App\Repositories\DocRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DocController extends AppBaseController
{
    /** @var  DocRepository */
    private $docRepository;

    public function __construct(DocRepository $docRepo)
    {
        $this->docRepository = $docRepo;
    }

    /**
     * Display a listing of the Doc.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $docs = $this->docRepository->all();

        return view('docs.index')
            ->with('docs', $docs);
    }

    /**
     * Show the form for creating a new Doc.
     *
     * @return Response
     */
    public function create()
    {
        return view('docs.create');
    }

    /**
     * Store a newly created Doc in storage.
     *
     * @param CreateDocRequest $request
     *
     * @return Response
     */
    public function store(CreateDocRequest $request)
    {
        $input = $request->all();

        $doc = $this->docRepository->create($input);

        Flash::success('Doc saved successfully.');

        return redirect(route('docs.index'));
    }

    /**
     * Display the specified Doc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doc = $this->docRepository->find($id);

        if (empty($doc)) {
            Flash::error('Doc not found');

            return redirect(route('docs.index'));
        }

        return view('docs.show')->with('doc', $doc);
    }

    /**
     * Show the form for editing the specified Doc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doc = $this->docRepository->find($id);

        if (empty($doc)) {
            Flash::error('Doc not found');

            return redirect(route('docs.index'));
        }

        return view('docs.edit')->with('doc', $doc);
    }

    /**
     * Update the specified Doc in storage.
     *
     * @param int $id
     * @param UpdateDocRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocRequest $request)
    {
        $doc = $this->docRepository->find($id);

        if (empty($doc)) {
            Flash::error('Doc not found');

            return redirect(route('docs.index'));
        }

        $doc = $this->docRepository->update($request->all(), $id);

        Flash::success('Doc updated successfully.');

        return redirect(route('docs.index'));
    }

    /**
     * Remove the specified Doc from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doc = $this->docRepository->find($id);

        if (empty($doc)) {
            Flash::error('Doc not found');

            return redirect(route('docs.index'));
        }

        $this->docRepository->delete($id);

        Flash::success('Doc deleted successfully.');

        return redirect(route('docs.index'));
    }
}
