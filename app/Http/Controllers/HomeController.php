<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Client;
use App\Models\Photo;
use App\Models\Option;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {	
        $email = Option::where('key', 'contact.email')->first()->value;
        $phone = Option::where('key', 'contact.phone')->first()->value;

        $social_links = array(
            'facebook'  => Option::where('key', 'facebook.link')->first()->value,
            'twitter'   => Option::where('key', 'twitter.link')->first()->value,
            'youtube'   => Option::where('key', 'youtube.link')->first()->value,
            'linkedin'  => Option::where('key', 'linkedin.link')->first()->value,
            'instagram' => Option::where('key', 'instagram.link')->first()->value
        );

        $data = array(
            'services'      => Service::orderBy('sort_order')->get(),
            'clients'       => Client::orderBy('sort_order')->get(),
            'photos'        => Photo::orderBy('sort_order')->get(),
            'email'         => $email,
            'phone'         => $phone,
            'social_links'  => $social_links
        );

    	return view('index', $data);
    }
}