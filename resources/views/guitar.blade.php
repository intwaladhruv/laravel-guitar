<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Guitars Product Page</title>
    <style>
        .guitar {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            float: left;
        }

        .container {
            display: flex;
        }

        .form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        input[type="submit"],
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }

        button a {
            text-decoration: inherit;
            color: inherit;
        }
    </style>
</head>

<body>
    <form action="/logout" method="post">
        @csrf
        <button id="logout" style="float: right; background-color: red;">Logout</button>
    </form>
    <h1>Guitars Product Page</h1>
    <div class="container">
        @foreach ($guitars as $guitar)
            <div class="guitar">
                <h3>{{ $guitar->make }} {{ $guitar->model }}</h3>
                <p>Color: {{ $guitar->color }}</p>
                <p>Strings: {{ $guitar->strings }}</p>
                <p>Price: {{ $guitar->price }}</p>
                <button><a href="/guitars/{{ $guitar->id }}/edit">Update</a></button>
                <form action="/guitars/{{$guitar->id}}" method="post" style="display: inline;">@csrf @method('delete')<button>Delete</button></form>
            </div>
        @endforeach
    </div>

    <div class="form">
        @if ($updateGuitar??false)
            <h2>
                Update Guitar
            </h2>
            <form method="post" action="/guitars/{{$updateGuitar['id']}}">
                @method('put')
        @else
            <h2>
                Add Guitar
            </h2>
            <form method="post" action="/guitars">
        @endif
        @csrf
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="{{$updateGuitar['model'] ?? ''}}" required>
        </div>
        <div class="form-group">
            <label for="make">Make:</label>
            <input type="text" id="make" name="make" value="{{$updateGuitar['make'] ?? ''}}" required>
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" id="color" name="color" value="{{$updateGuitar['color'] ?? ''}}" required>
        </div>
        <div class="form-group">
            <label for="strings">Number of Strings:</label>
            <input type="number" id="strings" name="strings" min="4" max="12" value="{{$updateGuitar['strings'] ?? ''}}" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{$updateGuitar['price'] ?? ''}}" required>
        </div>
        <input type="submit" name="" value="Save Guitar">
        </form>
    </div>
</body>

</html>
