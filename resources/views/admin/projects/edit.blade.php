@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
        <h2 class="fs-2">Edit</h2>
    </div>
    <div class="container">
        <form  action="{{ route('admin.projects.update', $project) }}" method="POST">
            {{-- Cross Site Request Forgering --}}
            @csrf 
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholsder="Project title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrption</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="link" placeholder="link">
            </div>

            <button class="btn btn-primary">Add changes</button>
        </form>
    </div>
  </section>
</main>

@endsection