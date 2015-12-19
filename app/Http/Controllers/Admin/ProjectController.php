<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Pingpong\Admin\Uploader\ImageUploader;
use Pingpong\Admin\Validation\Article\Create;
use Pingpong\Admin\Validation\Article\Update;

use App\Models\Project\Project;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    protected $articles;

    /**
     * @var ImageUploader
     */
    protected $uploader;

    /**
     * @param ImageUploader $uploader
     */
    public function __construct(ImageUploader $uploader)
    {
        $this->uploader = $uploader;

        $this->repository = $this->getRepository();
    }

    /**
     * Get repository instance.
     *
     * @return mixed
     */
    public function getRepository()
    {
        $repository = 'App\Repositories\Admin\Project\ProjectRepository';

        return app($repository);
    }

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct(ProjectRepository $projects)
    // {
    //     $this->middleware('auth');

    //     $this->projects = $projects;
    // }

    /**
     * Display a listing of projects.
     *
     * @return Response
     */
    public function index()
    {
        $projects = $this->repository->allOrSearch(Input::get('q'));

        $no = $projects->firstItem();

        return view('admin.projects.index', compact('projects', 'no'));
    }
}