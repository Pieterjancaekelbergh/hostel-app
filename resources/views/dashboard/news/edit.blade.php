@extends('layouts.dashboard')

@section('content')
<form action="{{ route('dashboard.posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <h2>Edit post</h2>
    
    @if($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <input type="hidden" name="id" value="{{ $post->id }}">
    
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input
            type="text" class="form-control" name="title" id="title" value="{{ old('title') ? old('title') : $post->title }}"
            @if($errors->has('title')) style="border-color: red;" @endif
        >
    </div>
    
    <div class="mb-3">
        <label for="intro" class="form-label">Intro</label>
        <textarea class="form-control" name="intro" id="intro" rows="10">{{ old('intro') ? old('intro') : $post->intro }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" name="content" id="content" rows="10">{{ old('content') ? old('content') : $post->content }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category" id="category">
            @foreach ($categories as $category)
                <option 
                    value="{{ $category->id }}" 
                    @if(old('category'))
                        {{ $category->id == old('category') ? 'selected' : '' }}
                    @else
                        {{ $category->id == $post->category_id ? 'selected' : '' }}
                    @endif
                >
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