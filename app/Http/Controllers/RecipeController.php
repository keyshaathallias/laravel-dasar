<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipes::all();
        // return view('home', [
        //     "recipes" => $recipes
        // ]);
        $title = 'Delete Recipe!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('home', compact('recipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials=$request->validate([
            "title"=>"required",
            "method"=>"required",
            "ingredients"=>"required",
            "categories"=>"required"
        ]);

        Recipes::create($credentials);
        return redirect()->back()->with('success', 'Resep Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe=Recipes::where('id', $id)->first();
        return view('edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials=$request->validate([
            "title"=>"required",
            "method"=>"required",
            "ingredients"=>"required",
            "categories"=>"required"
        ]);

        Recipes::where('id', $id)->update($credentials);
        return redirect('/recipes')->with('success', 'Resep Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Recipes::destroy($id);
        return redirect()->back()->with('success', 'Resep Berhasil Hapus!');

    }
}
