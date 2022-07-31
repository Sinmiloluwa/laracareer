<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Cookie;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ListingController extends Controller
{
    public function index() {
        $listings = Listing::latest()->filter(request(['tag','search']))->paginate(8);
        return view('listings.index', compact('listings'));
    }

    public function show(Listing $listing) {
        if(Cookie::get($listing->id) == ''){
            $cookie = Cookie::make($listing->id,'1',60);
            $listing->incrementReadCount();
            return response()->view('listings.show',compact('listing'))->withCookie($cookie);
        }
        return view('listings.show',compact('listing'));
    }

    public function create() {
        return view('listings.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $uploadedFileUrl = Cloudinary::upload($request->file('logo')->getRealPath())->getSecurePath();
        }

        $formFields['logo'] = $uploadedFileUrl;
        $formFields['user_id'] = auth()->user()->id;
        
        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created sccessfully!');
    }
}
