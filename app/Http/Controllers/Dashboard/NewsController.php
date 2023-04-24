<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Mail\NewPostAlert;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Traits\UploadsFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    use UploadsFile;

    public function index() {
        $posts = Post::all();
        return view('dashboard.news.index', compact('posts'));
    }

    public function testSendMail() {
        
        $data = [
            'title' => 'Hello from the other side',
            'content' => 'I must have called a thousand times'
        ];

        Mail::to('bart.peeters@vrt.be')->send(
            new NewPostAlert($data)
        );

        // show message to browser
        return 'Mail sent';
    }

    public function create() {
        $categories = Category::all();
        $post = null;
        return view('dashboard.news.create', compact('categories', 'post'));
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

    public function edit(Post $post) {
        $categories = Category::all();
        $tags = Tag::all();

        return view('dashboard.news.edit', compact('categories', 'post', 'tags'));
    }

    public function update(Post $post, PostRequest $r) {
        // validation happens at PostRequest level

        // validation passed, so we can save the post
        // and handle the file upload
        if ($r->hasFile('image')) {
            $imagePath = $this->uploadFile($r->image);
        }

        $post->title = $r->title;
        $post->slug = Str::slug($r->title);
        $post->intro = $r->intro;
        $post->content = $r->content;
        $post->category_id = $r->category;
        // $post->image = $imagePath;
        
        // sync the tags with the post
        $post->tags()->sync($r->tags);
        
        $post->save();

        return redirect()->route('dashboard.posts.index');
    }

    public function delete(Post $post) {

        $post->delete();
        return redirect()->route('dashboard.posts.index');

    }
}
