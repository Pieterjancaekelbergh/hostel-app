@extends('layouts.dashboard')



{{-- overview of all posts --}}
@section('content')
    <div class="row">
        <div class="col-sm-6"><h1>Posts</h1></div>
        <div class="col-sm-6 text-end">
            <a class="btn btn-warning" href="{{ route('dashboard.posts.create') }}">Create new post</a>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="d-flex justify-content-end">
                        {{-- btns --}}
                        <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        &nbsp;
                        <form action="{{ route('dashboard.posts.delete', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection

