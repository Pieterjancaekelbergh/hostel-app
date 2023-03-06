<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $newsItems = [
          [
            'id' => 1,
            'title '=> 'New website',
            'slug' => 'new-website',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
          ],
          [
            'id' => 2,
            'title '=> 'Promotions on our luxury bedroom',
            'slug' => 'promotions-on-bedroom',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
          ],
          [
            'id' => 3,
            'title '=> 'Checkout our swimming pool, it is awesome and full of fishes', 
            'slug' => 'fishy-pool',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
          ],
        ];

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



        return view('news.index', compact('newsItems', 'menuItems'));
    }

    public function show($slug)
    {
        $dummyData = [
            'title' => "News Title $slug",
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ];

        return view('news.show', compact('dummyData'));
    }

}
