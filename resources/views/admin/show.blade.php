@extends('layouts.app')

@section('content')
  <div class="container pt-4 pb-4">
    <h2 class="text-center">
      {{ $cocktail['name'] }}
  </h2>
  <p>
      Main Alcohol:
      {{ $cocktail['main_alcohol'] }}
  </p>
  <p>
      Ingredients:
      {{-- {{ $ingredient[''] }} --}}
  </p>
  <p>
      Preparation:
      {{ $cocktail['preparations'] }}
  </p>
  <p>
      Glass Type:
      {{ $cocktail['glass_type'] }}
  </p>
  <p>
      Serving Temperature:
      {{ $cocktail['serving_temperature'] }}
  </p>
  <p>
      Garnish:
      {{ $cocktail['garnish'] }}
  </p>
  <p>
      Price:
      {{ $cocktail['price'] }}€
  </p>

  </div>
@endsection