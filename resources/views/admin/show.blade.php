@extends('layouts.app')

@section('content')
    <div class="container pt-5 pb-4">
        <div class="d-flex justify-content-between">
            <div class="cocktail-img-container">
                <img src="https://www.transparentpng.com/thumb/cocktail/bTJb4v-cocktail-picture.png" alt="{{$cocktail["name"]}}">
            </div>
            <div class="cocktail-deatails-container">
                <h2 class="pb-3 ps-4">
                    {{ $cocktail['name'] }}
                </h2>
                <p>
                    <span class="bold">
                        Main Alcohol:
                    </span>
                    
                    {{ $cocktail['main_alcohol'] }}
                </p>
                <p>
                    <span class="bold">Ingredients:</span>
                <ul>
                    @foreach ($cocktail->ingredients as $ingredient)
                        <li>
                            {{ $ingredient->name }}
                        </li>
                    @endforeach
                </ul>
                </p>
                <p>
                    <span class="bold">Preparation:</span>
                    {{ $cocktail['preparations'] }}
                </p>
                <p>
                    <span class="bold">Glass type:</span>
                    {{ $cocktail['glass_type'] }}
                </p>
                <p>
                    <span class="bold">Serving temperature:</span>
                    {{ $cocktail['serving_temperature'] }}
                </p>
                <p>
                    <span class="bold">Garnish:</span>
                    {{ $cocktail['garnish'] }}
                </p>
                <p>
                    <span class="bold">Price:</span>
                    {{ $cocktail['price'] }}€
                </p>
            </div>
        </div>
        <div class="pt-3 text-center">
            <a role="button" href="{{route("cocktail.index")}}" class="btn buttonbg "> Back to Cocktails List</a>
        </div>
    </div>
@endsection
