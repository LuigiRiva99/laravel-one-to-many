<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //recupero array di types per poterlo passare alla vista create
        $types = Type::all();
        return view('admin.projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        // $request->validate([
        //     'title' => 'required|max:150|string',
        //     'description' => 'nullable|string',
        //     'type_id' => 'nullable|exists:types,id'
        // ]);
        
        $data = $request->all();

        $new_project = Project::create($data);

        return to_route('admin.projects.show', $new_project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //recupero array di types per poterlo passare alla vista edit
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {

        // $request->validate([
        //     'title' => 'required|max:150|string',
        //     'description' => 'nullable|string',
        //     'type_id' => 'nullable|exists:types,id'
        // ]);

        $data = $request->all();

        $project->fill($data);

        $project->save();

        return view('admin.projects.show', compact('project')) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
