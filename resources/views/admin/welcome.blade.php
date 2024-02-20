<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Db_cocktails</title>
    @vite('resources/js/app.js')
</head>

<body class="py-4">
    <header>
        <div class="container">
            <h1 class=" text-center">
                Cocktail list
            </h1>
        </div>
    </header>
    <main>
        <div class="container">
            @if (session('message'))
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Notification</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        @endif
            <a class="btn buttonbg" href="{{ route('cocktail.create') }}">
                Add new cocktail
            </a>
            <table class="table mt-4 table-striped-rows table-dark">
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
                            <td>{{ $cocktail['price'] }}€</td>
                            <td>{{ $cocktail['type'] }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('cocktail.show', $cocktail) }}" class="btn buttonbgindex btn-sm">Info</a>
                                    <form action="{{route("cocktail.destroy", $cocktail)}}" method="POST" style="display: inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn buttonbgindex btn-sm">Delete Cocktail</button>
                                    </form>
                                    <a href="{{ route('cocktail.edit', $cocktail) }}" class="btn buttonbgindex btn-sm">Edit</a>
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
