<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        //dd($comics);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = DB::table('comics')->select('type as name_type')->distinct()->get();
        //dd($types[0]->name_type);
        return view('comics.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Inserire i nuovi dati nel db
        $data = $request->all();
        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->description = $data['description'];
        $comic->image_url = $data['image_url'];
        $comic->price = $data['price'];
        $comic->sale_date = $data['sale_date'];
        $lastId = (Comic::orderBy('id', 'desc')->first()->id) + 1;
        $comic->slug = Str::slug($comic->title, '-') . '-' . $lastId ;
        //dd($lastId);
        //dd($comic);
        $comic->save();
        return redirect()->route('comics.show', $comic->id)->with('created', $data['title']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        //$comic = Comic::where('slug', $slug)->first();
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $types = DB::table('comics')->select('type as name_type')->distinct()->get();

        return view('comics.edit', compact(['comic', 'types']));
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
        //dd($request->all());
        $data = $request->all();
        $comic = Comic::findOrFail($id);

        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->description = $data['description'];
        $comic->image_url = $data['image_url'];
        $comic->price = $data['price'];
        $comic->sale_date = $data['sale_date'];
        $comic->slug = Str::slug($comic->title, '-') . '-' . $comic->id;
        $comic->save();

        return redirect()->route('comics.show', $comic->id)->with('edited', $data['title']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $comic = Comic::findOrFail($id);
        $comic->delete();
       

        return redirect()->route('comics.index')->with('delete', $comic->title);
    }
}
