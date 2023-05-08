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
                <th>Actions</th>
                <th class="text-end">
                    {!! Mdi::mdi('cart') !!}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="d-flex">
                        {{-- btns --}}
                        <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        &nbsp;
                        <form action="{{ route('dashboard.posts.delete', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td class="text-end">
                        <form method="POST" action="{{ route('dashboard.cart.add') }}">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-success">
                                {!! Mdi::mdi('cart') !!} 
                            </button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection

