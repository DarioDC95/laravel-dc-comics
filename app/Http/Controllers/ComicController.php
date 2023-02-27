<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $data_form = $this->validation($request->all());

        $newComic = new Comic();
        
        $newComic->fill($data_form);
        // $form_data = $request->all();
        
        // $newComic->title = $form_data['title'];
        // $newComic->description = $form_data['description'];
        // $newComic->thumb = $form_data['thumb'];
        // $newComic->price = $form_data['price'];
        // $newComic->series = $form_data['series'];
        // $newComic->sale_date = $form_data['sale_date'];
        // $newComic->type = $form_data['type'];
        // $newComic->artists = $form_data['artists'];
        // $newComic->writers = $form_data['writers'];

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

        // $editComic->title = $request['title'];
        // $editComic->description = $request['description'];
        // $editComic->thumb = $request['thumb'];
        // $editComic->price = $request['price'];
        // $editComic->series = $request['series'];
        // $editComic->sale_date = $request['sale_date'];
        // $editComic->type = $request['type'];
        // $editComic->artists = $request['artists'];
        // $editComic->writers = $request['writers'];

        $form_data = $this->validation($request->all());

        $editComic->update($form_data);

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
        $deletedComic = Comic::findOrFail($id);

        $deletedComic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data) 
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:100',
            'description' => 'nullable|max:65535',
            'thumb' => 'nullable|max:255',
            'price' => 'required|between:0, 99.99|decimal:0,2',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50',
            'artists' => 'nullable|max:65535',
            'writers' => 'nullable|max:65535',
        ], 
        [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere superiore a :max caratteri',
            'description.max' => 'La descrizione deve avere massimo :max caratteri',
            'thumb.max' => 'L\'URL deve avere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.between' => 'Il prezzo deve avere al massimo 2 numeri interi',
            'price.decimal' => 'Il prezzo deve avere al massimo 2 decimali',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'La serie deve avere al massimo di :max caratteri',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'type.required' => 'Un tipo deve essere selezionato',
            'type.max' => 'Il tipo non deve essere più lungo di :max caratteri',
            'artists.max' => 'Il campo non deve essere più lungo di :max caratteri',
            'writers.max' => 'Il campo non deve essere più lungo di :max caratteri',
        ])->validate();

        return $validator;
    }
}
