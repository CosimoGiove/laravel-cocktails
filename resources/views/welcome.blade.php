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
        <div class="container d-flex">
            <div class="row">
                <ul>
                    @foreach ($cocktails as $cocktail)
                        <li>
                            <h2>
                                {{ $cocktail['name'] }}
                            </h2>
                            <p>
                                Main Alcohol:
                                {{ $cocktail['main_alcohol'] }}
                            </p>
                            <p>
                                Ingredients:
                                {{ $cocktail['ingredients'] }}
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
                                price:
                                {{ $cocktail['price'] }}€
                            </p>
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
