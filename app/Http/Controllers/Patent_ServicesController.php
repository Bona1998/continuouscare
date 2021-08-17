<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatent_ServicesRequest;
use App\Http\Requests\UpdatePatent_ServicesRequest;
use App\Repositories\Patent_ServicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patent_ServicesController extends AppBaseController
{
    /** @var  Patent_ServicesRepository */
    private $patentServicesRepository;

    public function __construct(Patent_ServicesRepository $patentServicesRepo)
    {
        $this->patentServicesRepository = $patentServicesRepo;
    }

    /**
     * Display a listing of the Patent_Services.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patentServices = $this->patentServicesRepository->all();

        return view('patent__services.index')
            ->with('patentServices', $patentServices);
    }

    /**
     * Show the form for creating a new Patent_Services.
     *
     * @return Response
     */
    public function create()
    {
        return view('patent__services.create');
    }

    /**
     * Store a newly created Patent_Services in storage.
     *
     * @param CreatePatent_ServicesRequest $request
     *
     * @return Response
     */
    public function store(CreatePatent_ServicesRequest $request)
    {
        $input = $request->all();

        $patentServices = $this->patentServicesRepository->createPost($request);

        Flash::success('Patent  Services saved successfully.');

        return redirect(route('patentServices.index'));
    }

    /**
     * Display the specified Patent_Services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patentServices = $this->patentServicesRepository->find($id);

        if (empty($patentServices)) {
            Flash::error('Patent  Services not found');

            return redirect(route('patentServices.index'));
        }

        return view('patent__services.show')->with('patentServices', $patentServices);
    }

    /**
     * Show the form for editing the specified Patent_Services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patentServices = $this->patentServicesRepository->find($id);

        if (empty($patentServices)) {
            Flash::error('Patent  Services not found');

            return redirect(route('patentServices.index'));
        }

        return view('patent__services.edit')->with('patentServices', $patentServices);
    }

    /**
     * Update the specified Patent_Services in storage.
     *
     * @param int $id
     * @param UpdatePatent_ServicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatent_ServicesRequest $request)
    {
        $patentServices = $this->patentServicesRepository->find($id);

        if (empty($patentServices)) {
            Flash::error('Patent  Services not found');

            return redirect(route('patentServices.index'));
        }

        $patentServices = $this->patentServicesRepository->update($request->all(), $id);

        Flash::success('Patent  Services updated successfully.');

        return redirect(route('patentServices.index'));
    }

    /**
     * Remove the specified Patent_Services from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patentServices = $this->patentServicesRepository->find($id);

        if (empty($patentServices)) {
            Flash::error('Patent  Services not found');

            return redirect(route('patentServices.index'));
        }

        $this->patentServicesRepository->delete($id);

        Flash::success('Patent  Services deleted successfully.');

        return redirect(route('patentServices.index'));
    }
}
