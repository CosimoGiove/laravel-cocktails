@extends('layouts.app')
@section('content')
<div class="container">
  <div class="pt-3 text-center">
    <a role="button" href="{{route("cocktail.index")}}" class="btn buttonbgindex "> Back to Cocktails List</a>
</div>
<form action="{{route("cocktail.update", $cocktail->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old("name", $cocktail->name)}}">
    </div>

    <div class="mb-3">
        <label for="main_alcohol" class="form-label">Main alcohol:</label>
        <input type="text" class="form-control" id="main_alcohol" name="main_alcohol" value="{{old("main_alcohol", $cocktail->main_alcohol)}}">
      </div>
      @foreach ($ingredients as $ingredient)
                <div class="form-check form-check-inline">
                    <input name="ingredients[]" class="form-check-input" id="ingredient-{{ $ingredient->id }}"
                        type="checkbox" value="{{ $ingredient->id }}"
                        {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="ingredient-{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                </div>
      @endforeach
      <div class="mb-3">
        <label for="preparations" class="form-label">Preparation:</label>
        <input type="text" class="form-control" id="name" name="preparations" value="{{old("preparations", $cocktail->preparations)}}">
      </div>

      <div class="mb-3">
        <label for="glass_type" class="form-label">Glass type:</label>
        <input type="text" class="form-control" id="glass_type" name="glass_type" value="{{old("glass_type", $cocktail->glass_type)}}">
      </div>

      <div class="mb-3">
        <label for="serving_temperature" class="form-label">Serving temperature:</label>
        <input type="text" class="form-control" id="serving_temperature" name="serving_temperature" value="{{old("serving_temperature", $cocktail->serving_temperature)}}">
      </div>

      <div class="mb-3">
        <label for="garnish" class="form-label">Garnish:</label>
        <input type="text" class="form-control" id="garnish" name="garnish" value="{{old("garnish", $cocktail->garnish)}}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old("price", $cocktail->price)}}">
      </div>
    <button type="submit" class="btn buttonbgindex">Submit</button>
  </form>
</div>
@endsection