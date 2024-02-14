<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;
use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\Ingredient;
use Spatie\FlareClient\View;

class CocktailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('admin.welcome', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();

        return view("admin.create", compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {
        $data = $request->validated();
        $cocktail = new Cocktail();
        $cocktail->fill($data);
        $cocktail->save();

        if (isset($data['ingredients'])) {
            $cocktail->ingredients()->sync($data['ingredients']);
        }

        return redirect()->route("cocktail.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        $ingredients = Ingredient::all();
        return view('admin.show', compact('cocktail', 'ingredients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        return view('admin.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, Cocktail $cocktail)
    {
        $data = $request->validated();
        $cocktail->update($data);
        return redirect()->route('cocktail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();
        return redirect()->route("cocktail.index");

    }
}
