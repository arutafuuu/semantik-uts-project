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

        $path = "images/no_images.png";

        if ($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|nullable|mimes:jpeg,png,jpg|max:2048',
            ]);

            $path = $request->file('photo')->store('images', 'public');
        }

        Movie::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'release_date' => $request->release_date,
            'age_restriction' => $request->age_restriction,
            'duration' => $request->duration,
            'trailer' => $request->trailer,
            'director' => $request->director,
            'description' => $request->description,
            'photo' => $path,
            'rating' => $request->rating,
        ]);

        return redirect()->route('admin.index')->with('success', 'Movie has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        $oldImage = $movie->photo;

        if ($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|nullable|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($movie->photo != "images/no_image.png")
            {
                Storage::disk('public')->delete($movie->photo);
            }

            $path = $request->file('photo')->store('images', 'public');
        }
        else if ($oldImage != "images/no_image.png")
        {
            $path = $oldImage;
        }
        else
        {
            $path = 'images/no_images.png';
        }

        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->release_date = $request->release_date;
        $movie->age_restriction = $request->age_restriction;
        $movie->duration = $request->duration;
        $movie->trailer = $request->trailer;
        $movie->director = $request->director;
        $movie->description = $request->description;
        $movie->photo = $path;
        $movie->rating = $request->rating;
        $movie->save();

        return redirect()->route('admin.index')->with('success', 'Movie has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        if ($movie)
        {
            if ($movie->photo && $movie->photo != "images/no_images.png")
            {
                Storage::disk('public')->delete($movie->photo);
            }

            $movie->delete();

            return redirect()->route('admin.index')->with('success', 'Movie has been deleted successfully.');
        }

        return redirect()->route('admin.index')->with('error', 'Movie not found.');
    }
    public function search(Request $request)
    {
        $query = $request->input('search');
        $movies = Movie::where('title', 'LIKE', "%{$query}%")
            ->orWhere('genre', 'LIKE', "%{$query}%")->get();
        return view('movies.search', ['movies' => $movies, 'query' => $query]);
    }
}
