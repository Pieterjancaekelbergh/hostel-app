<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
      $posts = Post::paginate(10); // SELECT * FROM posts

        $menuItems = [
            [
                'title' => 'Home',
                'url' => '/',
                'active' => false
            ],
            [
                'title' => 'News',
                'url' => '/news',
                'active' => true
            ]            
        ];

        return view('news.index', compact('posts', 'menuItems'));
    }

    public function show($slug)
    {
      $menuItems = [
        [
            'title' => 'Home',
            'url' => '/',
            'active' => false
        ],
        [
            'title' => 'News',
            'url' => '/news',
            'active' => true
        ]            
    ];

        $dummyData = [
            'title' => "News Title $slug",
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ];

        return view('news.show', compact('dummyData', 'menuItems'));
    }

}
