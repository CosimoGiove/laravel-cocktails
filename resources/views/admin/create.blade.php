@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route("cocktail.store")}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old("name")}}">
    </div>

    <div class="mb-3">
        <label for="main_alcohol" class="form-label">Main alcohol:</label>
        <input type="text" class="form-control" id="main_alcohol" name="main_alcohol" value="{{old("main_alcohol")}}">
      </div>
      <div class="mb-3">
        <label for="ingredients" class="form-label">Ingredients:</label>
        <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{old("ingredients")}}">
      </div>

      <div class="mb-3">
        <label for="preparations" class="form-label">Preparation:</label>
        <input type="text" class="form-control" id="name" name="preparations" value="{{old("preparations")}}">
      </div>

      <div class="mb-3">
        <label for="glass_type" class="form-label">Glass type:</label>
        <input type="text" class="form-control" id="glass_type" name="glass_type" value="{{old("glass_type")}}">
      </div>

      <div class="mb-3">
        <label for="serving_temperature" class="form-label">Serving temperature:</label>
        <input type="text" class="form-control" id="serving_temperature" name="serving_temperature" value="{{old("serving_temperature")}}">
      </div>

      <div class="mb-3">
        <label for="garnish" class="form-label">Garnish:</label>
        <input type="text" class="form-control" id="garnish" name="garnish" value="{{old("garnish")}}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old("price")}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection