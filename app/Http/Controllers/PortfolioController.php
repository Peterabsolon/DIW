<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Option;

class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {	
        $email  = Option::where('key', 'contact.email')->first()->value;
        $phone  = Option::where('key', 'contact.phone')->first()->value;

        $data = array(
            'projects'      => Article::orderBy('sort_order')->get(),
            'email'         => $email,
            'phone'         => $phone
        );

    	return view('portfolio', $data);
    }
}