<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Photo;
use App\Models\Option;

class AboutController extends Controller
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
        $slogan = Option::where('key', 'site.slogan')->first()->value;
        $description = Option::where('key', 'site.description')->first()->value;

        $social_links = array(
            'facebook'  => Option::where('key', 'facebook.link')->first()->value,
            'twitter'   => Option::where('key', 'twitter.link')->first()->value,
            'youtube'   => Option::where('key', 'youtube.link')->first()->value,
            'linkedin'  => Option::where('key', 'linkedin.link')->first()->value,
            'instagram' => Option::where('key', 'instagram.link')->first()->value
        );

        $data = array(
            'photos'        => Photo::orderBy('sort_order')->get(),
            'employees'     => Employee::orderBy('sort_order')->get(),
            'email'         => $email,
            'phone'         => $phone,
            'slogan'        => $slogan,
            'description'   => $description,
            'social_links'  => $social_links
        );

    	return view('about', $data);
    }
}