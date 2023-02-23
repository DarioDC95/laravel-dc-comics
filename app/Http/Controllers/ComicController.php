<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {
        $nav = config('db.menu');
        $icons = config('db.icons');
        $comics = Comic::all();

        return view('comics', compact('nav', 'icons', 'comics'));
    }

    public function single($id) {
        $nav = config('db.menu');
        $icons = config('db.icons');
        $singleComic = Comic::where('slug', '=', $id)->get();
        $singleComic = $singleComic[0];

        return view('singleComic', compact('nav', 'icons', 'singleComic'));
    }
}