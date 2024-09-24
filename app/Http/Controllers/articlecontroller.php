<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlecontroller extends Controller
{
    public function index(){
    $article = [
        [
            "article name" => "morning article"
        ],
        [
            "article name" => "afternoon article"
        ],
        [
            "article name" => "evening article"
        ],
        [
            "article name" => "night article"
        ]
        
    ];
    return view ('article.index', compact('article'));
}

}
    
