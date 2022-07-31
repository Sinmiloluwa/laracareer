<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListerController extends Controller
{
    public function index() {
        $listings = auth()->user()->listings;
        return view('listers.index', compact('listings'));
    }

    public function search(Request $request) {
        if($request['search'] ?? false) {
        $search = Listing::with('user')
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' .request('search') . '%')
            ->orWhere('company', 'like', '%' .request('search') . '%')
            ->orWhere('location', 'like', '%' .request('search') . '%')
            ->orWhere('tags', 'like', '%' .request('search') . '%')->get();
        }

        dd($search);
    }

    public function listings() {
        $listings = auth()->user()->listings;
        return view('listers.listings', compact('listings'));
    }

    public function edit() {
        return view('listers.edit');
    }

    public function create(Listing $listing) {
        dd('yeah');
    }

    public function applications() {
        dd('yeah');
    }
}
