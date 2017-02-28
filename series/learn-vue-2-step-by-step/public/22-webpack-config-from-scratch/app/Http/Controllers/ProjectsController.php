<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'projects' => Project::all()
        ]);
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'comment' => 'required|min:3'
        ]);

        Project::create([
            'name' => request('name'),
            'description' => request('description'),
            'comment' => request('comment'),
        ]);

        return ['message' => 'Project created!'];
    }
}
