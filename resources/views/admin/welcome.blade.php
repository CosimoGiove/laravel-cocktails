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
            <a class="btn btn-success" href="{{ route('cocktail.create') }}">
                Add new cocktail
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name:</th>
                        <th scope="col">Price:</th>
                        <th scope="col">type:</th>
                        <th scope="col">info</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cocktails as $cocktail)
                        <tr>
                            <th scope="row">{{ $cocktail['id'] }}</th>
                            <td>{{ $cocktail['name'] }}</td>
                            <td>{{ $cocktail['price'] }}</td>
                            <td>{{ $cocktail['type'] }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('cocktail.show', $cocktail) }}" class="btn btn-info btn-sm">Info</a>
                                    <form action="{{route("cocktail.destroy", $cocktail)}}" method="POST" style="display: inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-sm">Delete Cocktail</button>
                                    </form>
                                    <a href="{{ route('cocktail.edit', $cocktail) }}" class="btn btn-secondary btn-sm">Edit</a>
                                </div> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
