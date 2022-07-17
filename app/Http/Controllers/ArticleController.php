<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            'Mon titre',
            'Ma description'
        ];

        return view('articles', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $articles = [
            1 => "Mon titre 1",
            2 => "Mon titre 2"
        ];

        $article = $articles[$id] ?? 'Page de titre';

        return view('article', [
            'article' => $article
        ]);

    }

    public function contact()
    {
        return view('contact');
    }

}
