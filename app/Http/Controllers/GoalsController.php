<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGoalsRequest;
use App\Http\Requests\UpdateGoalsRequest;
use App\Repositories\GoalsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GoalsController extends AppBaseController
{
    /** @var  GoalsRepository */
    private $goalsRepository;

    public function __construct(GoalsRepository $goalsRepo)
    {
        $this->goalsRepository = $goalsRepo;
    }

    /**
     * Display a listing of the Goals.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $goals = $this->goalsRepository->all();

        return view('goals.index')
            ->with('goals', $goals);
    }

    /**
     * Show the form for creating a new Goals.
     *
     * @return Response
     */
    public function create()
    {
        return view('goals.create');
    }

    /**
     * Store a newly created Goals in storage.
     *
     * @param CreateGoalsRequest $request
     *
     * @return Response
     */
    public function store(CreateGoalsRequest $request)
    {
        

        $goals = $this->goalsRepository->createPost($request);

        Flash::success('Goals saved successfully.');

        return redirect(route('goals.index'));
        
       
    }

    /**
     * Display the specified Goals.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $goals = $this->goalsRepository->find($id);

        if (empty($goals)) {
            Flash::error('Goals not found');

            return redirect(route('goals.index'));
        }

        return view('goals.show')->with('goals', $goals);
    }

    /**
     * Show the form for editing the specified Goals.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $goals = $this->goalsRepository->find($id);

        if (empty($goals)) {
            Flash::error('Goals not found');

            return redirect(route('goals.index'));
        }

        return view('goals.edit')->with('goals', $goals);
    }

    /**
     * Update the specified Goals in storage.
     *
     * @param int $id
     * @param UpdateGoalsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGoalsRequest $request)
    {
        $goals = $this->goalsRepository->find($id);

        if (empty($goals)) {
            Flash::error('Goals not found');

            return redirect(route('goals.index'));
        }

        $goals = $this->goalsRepository->update($request->all(), $id);

        Flash::success('Goals updated successfully.');

        return redirect(route('goals.index'));
    }

    /**
     * Remove the specified Goals from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $goals = $this->goalsRepository->find($id);

        if (empty($goals)) {
            Flash::error('Goals not found');

            return redirect(route('goals.index'));
        }

        $this->goalsRepository->delete($id);

        Flash::success('Goals deleted successfully.');

        return redirect(route('goals.index'));
    }
}
