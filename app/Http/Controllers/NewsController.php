<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $menuItems = $this->menuItems;
        $menuItems[1]['active'] = true;

        $posts = Post::paginate(10); // SELECT * FROM posts
        return view('news.index', compact('posts', 'menuItems'));
    }

    public function show($slug)
    {
      $menuItems = $this->menuItems;
      $menuItems[1]['active'] = true;


      // get post from slug
      $post = Post::where('slug', $slug)->first();
      

      return view('news.show', compact('post', 'menuItems'));
    }

}
