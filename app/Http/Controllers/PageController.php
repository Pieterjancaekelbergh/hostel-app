<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home() {
        // data for menu (declared in parent class)
        $menuItems = $this->menuItems;
        $menuItems[0]['active'] = true;

        $post = Post::first(); // SELECT * FROM posts
        
        $tags = [1, 3];
        // sync tags with post
        $post->tags()->sync($tags);
        

        $posts = Post::paginate(50); // SELECT * FROM posts

        return view('pages.home', compact('menuItems', 'posts'));
    }
}
