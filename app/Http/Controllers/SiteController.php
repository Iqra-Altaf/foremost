<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
	public function index()
	{
		$packages = \App\Package::where('is_popular', true)->take(3)->get();

		$services = \App\Category::where([
		    ['is_popular', '=', true],
		    ['type', '=', \App\Category::SERVICE],
		])->take(4)->get();

		return view('site.welcome', [
			'services'	=> $services,
			'packages'	=> $packages
		]);
	}

	public function services()
	{
		$services = \App\Category::where(
			'type', \App\Category::SERVICE
		)->get();

		return view('site.services', [
			'services' => $services
		]);
	}

	public function about()
	{
		return view('site.about');
	}

	public function gallery()
	{
		$galleries = \App\Gallery::all();
		$categories = \App\Category::where(
			'type', \App\Category::GALLERY
		)->get();

		return view('site.gallery', [
			'galleries' => $galleries,
			'categories' => $categories
		]);
	}

	public function book(\App\Package $package)
	{
		$dt 		= \Carbon\Carbon::now();
		$booking	= \App\Models\Booking::create([
			'user_id'		=> Auth::id(),
			'package_id'	=> $package->id,
			'date'			=> $dt->toDateString(),
			'time'			=> $dt->toTimeString()
		]);

		return redirect(route('bookings.edit', $booking->id));
	}

	public function packages()
	{
		$packages = \App\Package::all();

		return view('site.packages', [
			'packages' => $packages
		]);
	}

	public function service($id)
	{
		$service = \App\Category::find($id);
		return view('site.service', [
			'service' => $service
		]);
	}

	public function addLike(\App\Package $package)
	{
		$package->popularity++;
		$package->save();

		return redirect(route('package_detail', $package->id));
	}

	public function packageDetail(\App\Package $package)
	{
		return view('site.package', [
			'this_package' => $package
		]);
	}

	public function allParlors()
	{
		if(isset($_GET['search']) && strlen($_GET['search']) > 0) {
			$parlors = \App\Parlor::where('name', 'like', '%'.$_GET['search'].'%')->get();
		} else {
			$parlors = \App\Parlor::all();
		}
		return view('site.parlors', [
			'parlors' => $parlors
		]);
	}

	public function parlorDetails(\App\Parlor $parlor)
	{
		return view('site.parlor', [
			'parlor' => $parlor
		]);
	}
}
