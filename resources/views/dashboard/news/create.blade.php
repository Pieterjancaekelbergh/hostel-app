<form action="{{ route('dashboard.posts.create') }}" method="POST">
    @csrf
    <p>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </p>
    <p>
        <label for="intro">Intro</label>
        <textarea name="intro" id="intro" cols="30" rows="10"></textarea>
    </p>
    <p>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </p>
    <p>
        <label for="category">Category</label>
        <select name="category" id="category">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
            
        </select>
    </p>

    <button type="submit">Create POST</button>
</form>