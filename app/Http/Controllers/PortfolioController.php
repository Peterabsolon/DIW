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
        $projects = Article::where('type', 'page')->orderBy('sort_order')->get();

        foreach($projects as $project) {
            $services = implode('<span class="separator"></span>', explode(',', $project->services));

            $project->services = $services;
        }

        $email  = Option::where('key', 'contact.email')->first()->value;
        $phone  = Option::where('key', 'contact.phone')->first()->value;

        $data = array(
            'projects'      => $projects,
            'email'         => $email,
            'phone'         => $phone
        );

    	return view('portfolio', $data);
    }
}