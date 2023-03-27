<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('dashboard.news.index', compact('posts'));
    }

    public function create() {
        $categories = Category::all();
        return view('dashboard.news.create', compact('categories'));
    }

    public function store(Request $r) {

        $validationRules = [
            'title' => 'required|min:3|max:255',
            'intro' => 'required',
            'content' => 'required',
            'category' => 'required|exists:categories,id'
        ];

        $r->validate($validationRules);
        
        $post = new Post();
        $post->title = $r->title;
        $post->slug = Str::slug($r->title);
        $post->intro = $r->intro;
        $post->content = $r->content;
        $post->category_id = $r->category;
        $post->save();

        return redirect()->route('dashboard.posts.create');
    }

    public function edit() {
        // todo
        return 'todo';
    }

    public function update() {
        // todo
        return 'todo';
    }

    public function delete() {
        // todo
        return 'todo';
    }
}
