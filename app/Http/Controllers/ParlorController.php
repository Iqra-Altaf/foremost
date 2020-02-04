<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParlorRequest;
use App\Http\Requests\UpdateParlorRequest;
use App\Repositories\ParlorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ParlorController extends AppBaseController
{
    /** @var  ParlorRepository */
    private $parlorRepository;

    public function __construct(ParlorRepository $parlorRepo)
    {
        $this->parlorRepository = $parlorRepo;
    }

    /**
     * Display a listing of the Parlor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->parlorRepository->pushCriteria(new RequestCriteria($request));
        $parlors = $this->parlorRepository->all();

        return view('parlors.index')
            ->with('parlors', $parlors);
    }

    /**
     * Show the form for creating a new Parlor.
     *
     * @return Response
     */
    public function create()
    {
        return view('parlors.create');
    }

    /**
     * Store a newly created Parlor in storage.
     *
     * @param CreateParlorRequest $request
     *
     * @return Response
     */
    public function store(CreateParlorRequest $request)
    {
        $input = $request->all();

		if($request->hasFile('image')) {
			$input['image'] = $request->file('image')->store('public');
		}

		if($request->has('is_popular'))
		{
			$input['is_popular'] = true;
		}

        $parlor = $this->parlorRepository->create($input);

        Flash::success('Parlor saved successfully.');

        return redirect(route('parlors.index'));
    }

    /**
     * Display the specified Parlor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parlor = $this->parlorRepository->findWithoutFail($id);

        if (empty($parlor)) {
            Flash::error('Parlor not found');

            return redirect(route('parlors.index'));
        }

        return view('parlors.show')->with('parlor', $parlor);
    }

    /**
     * Show the form for editing the specified Parlor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parlor = $this->parlorRepository->findWithoutFail($id);

        if (empty($parlor)) {
            Flash::error('Parlor not found');

            return redirect(route('parlors.index'));
        }

        return view('parlors.edit')->with('parlor', $parlor);
    }

    /**
     * Update the specified Parlor in storage.
     *
     * @param  int              $id
     * @param UpdateParlorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParlorRequest $request)
    {
        $parlor = $this->parlorRepository->findWithoutFail($id);

        if (empty($parlor)) {
            Flash::error('Parlor not found');

            return redirect(route('parlors.index'));
        }
		$input = $request->all();

		if($request->hasFile('image')) {
			$input['image'] = $request->file('image')->store('public');
		} else {
			$input['image'] = $parlor->image;
		}

		if($request->has('is_popular'))
		{
			$input['is_popular'] = true;
		} else {
			$input['is_popular'] = false;
		}

        $parlor = $this->parlorRepository->update($input, $id);

        Flash::success('Parlor updated successfully.');

        return redirect(route('parlors.index'));
    }

    /**
     * Remove the specified Parlor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parlor = $this->parlorRepository->findWithoutFail($id);

        if (empty($parlor)) {
            Flash::error('Parlor not found');

            return redirect(route('parlors.index'));
        }

        $this->parlorRepository->delete($id);

        Flash::success('Parlor deleted successfully.');

        return redirect(route('parlors.index'));
    }
}
