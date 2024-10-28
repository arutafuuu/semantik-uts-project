<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'photo' => 'image|nullable|mimes:jpeg,png,jpg|max:2048',
//        ]);

//        if ($request->hasFile('photo')) {
//            $photo = $request->file('photo')->getClientOriginalName();
//            $filename = pathinfo($photo, PATHINFO_FILENAME);
//            $extension = $request->file('photo')->getClientOriginalExtension();
//            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
//
//            Storage::disk('public')->put($path, file_get_contents($request->file('photo')));
//        }

        $path = $request->file('photo')->store('images', 'public');

        Movie::create([
            'title' => $request->title,
            'genre' =>  $request->genre,
            'release_date' =>  $request->release_date,
            'age_restriction' =>  $request->age_restriction,
            'duration' =>  $request->duration,
            'director' =>  $request->director,
            'description' =>  $request->description,
            'photo' =>  $path,
            'rating' => 0,
        ]);

//        $ratingValue = 0;
//        $movie = new Movie();
//        $movie->title =  $request->title;
//
//
//        $movie->rating = $ratingValue;
//
//        $movie->save();

        return redirect('/movies');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
