<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrifDescriptionRequest;
use App\Http\Requests\UpdateBrifDescriptionRequest;
use App\Repositories\BrifDescriptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BrifDescriptionController extends AppBaseController
{
    /** @var  BrifDescriptionRepository */
    private $brifDescriptionRepository;

    public function __construct(BrifDescriptionRepository $brifDescriptionRepo)
    {
        $this->brifDescriptionRepository = $brifDescriptionRepo;
    }

    /**
     * Display a listing of the BrifDescription.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $brifDescriptions = $this->brifDescriptionRepository->all();

        return view('brif_descriptions.index')
            ->with('brifDescriptions', $brifDescriptions);
    }

    /**
     * Show the form for creating a new BrifDescription.
     *
     * @return Response
     */
    public function create()
    {
        return view('brif_descriptions.create');
    }

    /**
     * Store a newly created BrifDescription in storage.
     *
     * @param CreateBrifDescriptionRequest $request
     *
     * @return Response
     */
    public function store(CreateBrifDescriptionRequest $request)
    {
    
        $brifDescription = $this->brifDescriptionRepository->createPost($request);

        Flash::success('Brif Description saved successfully.');

        return redirect(route('brifDescriptions.index'));
    }
   
    /**
     * Display the specified BrifDescription.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $brifDescription = $this->brifDescriptionRepository->find($id);

        if (empty($brifDescription)) {
            Flash::error('Brif Description not found');

            return redirect(route('brifDescriptions.index'));
        }

        return view('brif_descriptions.show')->with('brifDescription', $brifDescription);
    }

    /**
     * Show the form for editing the specified BrifDescription.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brifDescription = $this->brifDescriptionRepository->find($id);

        if (empty($brifDescription)) {
            Flash::error('Brif Description not found');

            return redirect(route('brifDescriptions.index'));
        }

        return view('brif_descriptions.edit')->with('brifDescription', $brifDescription);
    }

    /**
     * Update the specified BrifDescription in storage.
     *
     * @param int $id
     * @param UpdateBrifDescriptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBrifDescriptionRequest $request)
    {
        $brifDescription = $this->brifDescriptionRepository->find($id);

        if (empty($brifDescription)) {
            Flash::error('Brif Description not found');

            return redirect(route('brifDescriptions.index'));
        }

        $brifDescription = $this->brifDescriptionRepository->update($request->all(), $id);

        Flash::success('Brif Description updated successfully.');

        return redirect(route('brifDescriptions.index'));
    }

    /**
     * Remove the specified BrifDescription from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $brifDescription = $this->brifDescriptionRepository->find($id);

        if (empty($brifDescription)) {
            Flash::error('Brif Description not found');

            return redirect(route('brifDescriptions.index'));
        }

        $this->brifDescriptionRepository->delete($id);

        Flash::success('Brif Description deleted successfully.');

        return redirect(route('brifDescriptions.index'));
    }
}
