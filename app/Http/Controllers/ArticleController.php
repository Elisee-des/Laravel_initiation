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

        return view('article', [
            'articles' => $articles
        ]);
    }
}
