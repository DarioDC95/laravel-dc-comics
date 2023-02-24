<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav = config('db.menu');
        $icons = config('db.icons');
        $comics = Comic::all();

        return view('comics.comics', compact('nav', 'icons', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = config('db.menu');
        
        return view('comics.newComic', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->price = $form_data['price'];
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];
        $newComic->artists = $form_data['artists'];
        $newComic->writers = $form_data['writers'];

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nav = config('db.menu');
        $icons = config('db.icons');
        $singleComic = Comic::findOrFail($id);

        return view('comics.singleComic', compact('nav', 'icons', 'singleComic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nav = config('db.menu');
        $singleComic = Comic::findOrFail($id);

        return (view('comics.editComic', compact('singleComic', 'nav')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editComic = Comic::findOrFail($id);

        $editComic->title = $request['title'];
        $editComic->description = $request['description'];
        $editComic->thumb = $request['thumb'];
        $editComic->price = $request['price'];
        $editComic->series = $request['series'];
        $editComic->sale_date = $request['sale_date'];
        $editComic->type = $request['type'];
        $editComic->artists = $request['artists'];
        $editComic->writers = $request['writers'];

        $editComic->update();

        return redirect()->route('comics.show', ['comic' => $editComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
