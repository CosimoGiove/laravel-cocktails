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
                ingredients list
            </h1>
        </div>
    </header>
    <main>
        <div class="container">
            
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
                    @foreach ($ingredients as $ingredient)
                        <tr>
                            <th scope="row">{{ $ingredient['id'] }}</th>
                            <td>{{ $ingredient['name'] }}</td>
                            <td>{{ $ingredient['type'] }}</td>
                            <td>
                                <div>
                                    <form action="{{route("ingredient.destroy", $ingredient)}}" method="POST" style="display: inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-sm">Delete ingredients</button>
                                    </form>
                                    {{-- <a href="{{ route('ingredient.edit', $ingredients) }}" class="btn btn-secondary btn-sm">Edit</a> --}}
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
