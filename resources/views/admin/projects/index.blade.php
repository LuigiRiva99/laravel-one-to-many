@extends('layouts.app')

@section('title', 'index')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="col-auto">
                    <h1>page index</h1>
                    <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Add Project</a>
                </div>
            </div>
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Types</th>
                        <th>Link</th>
                    </tr>
                    </thead>
                    <tbody  class="table-group-divider table-hover table-striped">
                    @foreach ($projects as $project)
                        <tr class="p-3">
                            <td>{{$project->id}}</td>
                            <td><a href="{{route('admin.projects.show', $project)}}"> {{$project->title}} </a></td>
                            <td>{{$project->description}}</td>
                            <td>{{optional($project->type)->name}}</td>
                            <td>{{$project->link}}</td>
                            <td><a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}">details </a></td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection