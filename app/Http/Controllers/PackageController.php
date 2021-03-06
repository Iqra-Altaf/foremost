<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Repositories\PackageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PackageController extends AppBaseController
{
    /** @var  PackageRepository */
    private $packageRepository;

    public function __construct(PackageRepository $packageRepo)
    {
        $this->packageRepository = $packageRepo;
    }

    /**
     * Display a listing of the Package.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packageRepository->pushCriteria(new RequestCriteria($request));
        $packages = $this->packageRepository->all();

        return view('packages.index')
            ->with('packages', $packages);
    }

    /**
     * Show the form for creating a new Package.
     *
     * @return Response
     */
    public function create()
    {
		$categories = \App\Category::where('type', \App\Category::SERVICE)->get();
		$parlors	= \App\Parlor::all();

        return view('packages.create', [
			'parlors'		=> $parlors,
			'categories'	=> $categories
		]);
    }

    /**
     * Store a newly created Package in storage.
     *
     * @param CreatePackageRequest $request
     *
     * @return Response
     */
    public function store(CreatePackageRequest $request)
    {
        $input = $request->all();

		if($request->hasFile('image')) {
			$input['image'] = $request->file('image')->store('public');
		}

		if($request->has('is_popular'))
		{
			$input['is_popular'] = true;
		} else {
			$input['is_popular'] = false;
		}

        $package = $this->packageRepository->create($input);

        Flash::success('Package saved successfully.');

        return redirect(route('packages.index'));
    }

    /**
     * Display the specified Package.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

        return view('packages.show')->with('package', $package);
    }

    /**
     * Show the form for editing the specified Package.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

		$categories = \App\Category::where('type', \App\Category::SERVICE)->get();
		$parlors	= \App\Parlor::all();

        return view('packages.edit', [
			'parlors'		=> $parlors,
			'categories'	=> $categories,
			'package'		=> $package
		]);
    }

    /**
     * Update the specified Package in storage.
     *
     * @param  int              $id
     * @param UpdatePackageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePackageRequest $request)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

		$input = $request->all();

		if($request->hasFile('image')) {
			$input['image'] = $request->file('image')->store('public');
		} else {
			$input['image'] = $package->image;
		}

		if($request->has('is_popular'))
		{
			$input['is_popular'] = true;
		} else {
			$input['is_popular'] = false;
		}

        $package = $this->packageRepository->update($input, $id);

        Flash::success('Package updated successfully.');

        return redirect(route('packages.index'));
    }

    /**
     * Remove the specified Package from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

        $this->packageRepository->delete($id);

        Flash::success('Package deleted successfully.');

        return redirect(route('packages.index'));
    }
}
