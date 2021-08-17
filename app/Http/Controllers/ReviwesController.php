<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviwesRequest;
use App\Http\Requests\UpdateReviwesRequest;
use App\Repositories\ReviwesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReviwesController extends AppBaseController
{
    /** @var  ReviwesRepository */
    private $reviwesRepository;

    public function __construct(ReviwesRepository $reviwesRepo)
    {
        $this->reviwesRepository = $reviwesRepo;
    }

    /**
     * Display a listing of the Reviwes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reviwes = $this->reviwesRepository->all();

        return view('reviwes.index')
            ->with('reviwes', $reviwes);
    }

    /**
     * Show the form for creating a new Reviwes.
     *
     * @return Response
     */
    public function create()
    {
        return view('reviwes.create');
    }

    /**
     * Store a newly created Reviwes in storage.
     *
     * @param CreateReviwesRequest $request
     *
     * @return Response
     */
    public function store(CreateReviwesRequest $request)
    {
       

        $reviwes = $this->reviwesRepository->createPost($request);

        Flash::success('Reviwes saved successfully.');

        return redirect(route('reviwes.index'));
    }

    /**
     * Display the specified Reviwes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reviwes = $this->reviwesRepository->find($id);

        if (empty($reviwes)) {
            Flash::error('Reviwes not found');

            return redirect(route('reviwes.index'));
        }

        return view('reviwes.show')->with('reviwes', $reviwes);
    }

    /**
     * Show the form for editing the specified Reviwes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reviwes = $this->reviwesRepository->find($id);

        if (empty($reviwes)) {
            Flash::error('Reviwes not found');

            return redirect(route('reviwes.index'));
        }

        return view('reviwes.edit')->with('reviwes', $reviwes);
    }

    /**
     * Update the specified Reviwes in storage.
     *
     * @param int $id
     * @param UpdateReviwesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReviwesRequest $request)
    {
        $reviwes = $this->reviwesRepository->find($id);

        if (empty($reviwes)) {
            Flash::error('Reviwes not found');

            return redirect(route('reviwes.index'));
        }

        $reviwes = $this->reviwesRepository->update($request->all(), $id);

        Flash::success('Reviwes updated successfully.');

        return redirect(route('reviwes.index'));
    }

    /**
     * Remove the specified Reviwes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reviwes = $this->reviwesRepository->find($id);

        if (empty($reviwes)) {
            Flash::error('Reviwes not found');

            return redirect(route('reviwes.index'));
        }

        $this->reviwesRepository->delete($id);

        Flash::success('Reviwes deleted successfully.');

        return redirect(route('reviwes.index'));
    }
}
