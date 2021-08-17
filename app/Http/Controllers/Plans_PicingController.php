<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlans_PicingRequest;
use App\Http\Requests\UpdatePlans_PicingRequest;
use App\Repositories\Plans_PicingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Plans_PicingController extends AppBaseController
{
    /** @var  Plans_PicingRepository */
    private $plansPicingRepository;

    public function __construct(Plans_PicingRepository $plansPicingRepo)
    {
        $this->plansPicingRepository = $plansPicingRepo;
    }

    /**
     * Display a listing of the Plans_Picing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $plansPicings = $this->plansPicingRepository->all();

        return view('plans__picings.index')
            ->with('plansPicings', $plansPicings);
    }

    /**
     * Show the form for creating a new Plans_Picing.
     *
     * @return Response
     */
    public function create()
    {
        return view('plans__picings.create');
    }

    /**
     * Store a newly created Plans_Picing in storage.
     *
     * @param CreatePlans_PicingRequest $request
     *
     * @return Response
     */
    public function store(CreatePlans_PicingRequest $request)
    {
        $input = $request->all();

        $plansPicing = $this->plansPicingRepository->create($input);

        Flash::success('Plans  Picing saved successfully.');

        return redirect(route('plansPicings.index'));
    }

    /**
     * Display the specified Plans_Picing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $plansPicing = $this->plansPicingRepository->find($id);

        if (empty($plansPicing)) {
            Flash::error('Plans  Picing not found');

            return redirect(route('plansPicings.index'));
        }

        return view('plans__picings.show')->with('plansPicing', $plansPicing);
    }

    /**
     * Show the form for editing the specified Plans_Picing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $plansPicing = $this->plansPicingRepository->find($id);

        if (empty($plansPicing)) {
            Flash::error('Plans  Picing not found');

            return redirect(route('plansPicings.index'));
        }

        return view('plans__picings.edit')->with('plansPicing', $plansPicing);
    }

    /**
     * Update the specified Plans_Picing in storage.
     *
     * @param int $id
     * @param UpdatePlans_PicingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlans_PicingRequest $request)
    {
        $plansPicing = $this->plansPicingRepository->find($id);

        if (empty($plansPicing)) {
            Flash::error('Plans  Picing not found');

            return redirect(route('plansPicings.index'));
        }

        $plansPicing = $this->plansPicingRepository->update($request->all(), $id);

        Flash::success('Plans  Picing updated successfully.');

        return redirect(route('plansPicings.index'));
    }

    /**
     * Remove the specified Plans_Picing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $plansPicing = $this->plansPicingRepository->find($id);

        if (empty($plansPicing)) {
            Flash::error('Plans  Picing not found');

            return redirect(route('plansPicings.index'));
        }

        $this->plansPicingRepository->delete($id);

        Flash::success('Plans  Picing deleted successfully.');

        return redirect(route('plansPicings.index'));
    }
}
