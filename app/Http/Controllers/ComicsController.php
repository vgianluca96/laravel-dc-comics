<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Storage;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $validated = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:1000',
            'thumb' => 'required',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:100',
        ]);
        
        */

        $data = $request->all();

        if ($request->has('thumb')) {
            $file_path = Storage::put('comics_images', $request->thumb);
            $data['thumb'] = $file_path;
        }

        //dd($file_path);
        //dd($data);

        Comic::create($data);

        return to_route('comics.index')->with('message', 'Item successfully created!');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::find($id);

        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $data = $request->all();

        if ($request->has('thumb') && $comic->thumb) {
            Storage::delete($comic->thumb);
            $file_path = Storage::put('comics_images', $request->thumb);
            $data['thumb'] = $file_path;
        }

        //dd($file_path);
        //dd($data);

        $comic->update($data);
        return to_route('comics.index')->with('message', 'Item successfully updated!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {

        if (!is_null($comic->thumb)) {
            Storage::delete($comic->thumb);
        }

        $comic->delete();
        return to_route('comics.index')->with('message', 'Item successfully deleted!');
    }
}
