<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Db_cocktails</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container">
            <h1 class=" text-center">
                Cocktail list
            </h1>
        </div>
    </header>
    <main>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('cocktail.create') }}">
                Add new cocktail
            </a>
            <div class="row">
                <ul>
                    @foreach ($cocktails as $cocktail)
                        <li class="pb-4">
                            <h2>
                                {{ $cocktail['name'] }}
                            </h2>
                            <p>
                                Main Alcohol:
                                {{ $cocktail['main_alcohol'] }}
                            </p>
                            <p>
                                price:
                                {{ $cocktail['price'] }}€
                            </p>
                            <a href="{{ route('cocktail.show', $cocktail) }}" class="btn btn-info btn-sm">Info</a>
                            <form action="{{route("cocktail.destroy", $cocktail)}}" method="POST" style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm">Delete Cocktail</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <div class="drink-img">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/606/487/original/cocktail-graphic-clipart-design-free-png.png"
                        alt="drink">
                </div>

            </div>

        </div>
    </main>

</body>

</html>
