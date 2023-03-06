<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('news.index');
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
