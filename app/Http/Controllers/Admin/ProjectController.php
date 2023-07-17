<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProjectDataTable;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectFile;
use App\Models\ProjectUser;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectDataTable $dataTable)
    {
        return $dataTable->render('backend.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('user_type', 3)->orWhere('user_type', 4)->pluck('name', 'id')->toArray();
        return view('backend.projects.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'user_id'   => 'required',

        ], [], [
            'name'          => 'Project name'
        ]);
        $data = $request->only(['name']);
        $data['created_by'] = auth()->user()->id;
        $project = Project::create($data);
        foreach ($request->user_id as $user_id) {
            $data = [];
            $data['user_id'] = $user_id;
            $data['project_id'] = $project->id;
            ProjectUser::create($data);
        }
        return redirect()->route('projects.index')->with('message', 'Project added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $user = ProjectUser::where('project_id', $project->id)->pluck('user_id')->toArray();
        $project['users'] = User::whereIn('id', $user)->get();
        $project['created_user'] = User::find($project->created_by);
        $project['file'] = ProjectFile::where('project_id', $project->id)->get();

        return view('backend.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $data['project'] = $project;
        $data['user'] = User::where('user_type', 3)->orWhere('user_type', 4)->pluck('name', 'id')->toArray();

        $user = ProjectUser::where('project_id', $project->id)->pluck('user_id')->toArray();
        $data['project']['user'] = User::whereIn('id', $user)->pluck('name', 'id')->toArray();

        return view('backend.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name'        => 'required',
            'user_id'   => 'required',

        ], [], [
            'name'          => 'Project name'
        ]);
        $project->update([
            'name' => $request->name
        ]);
        ProjectUser::where('project_id', $project->id)->delete();
        foreach ($request->user_id as $user_id) {
            $data = [];
            $data['user_id'] = $user_id;
            $data['project_id'] = $project->id;
            ProjectUser::create($data);
        }

        return redirect(route('projects.index'))->with('message', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
