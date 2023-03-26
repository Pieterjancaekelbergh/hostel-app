@extends('layouts.dashboard')

@section('content')
<form action="{{ route('dashboard.posts.create') }}" method="POST">
    @csrf
    @method('POST')
    <h2>Create new post</h2>
    
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    
    <div class="mb-3">
        <label for="intro" class="form-label">Intro</label>
        <textarea class="form-control" name="intro" id="intro" rows="10"></textarea>
    </div>
    
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" name="content" id="content" rows="10"></textarea>
    </div>
    
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create article</button>
    </div>
</form>
@endsection