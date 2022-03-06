<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @include('header')

<div class="registration">
        <h2>Registration</h2>
        <form action="{{ action('App\Http\Controllers\VeterinaryController@store') }}" method="post">
            @csrf
            <input type="hidden" name="id">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" required>

            <label for="">Surname</label>
            <input type="text" name="surname" required>

            <label for="">Email</label>
            <input type="text" name="email" required>

            <label for="">Phone</label>
            <input type="text" name="phone" required>
            <label for="">Address</label>
            <input type="text" name="address" required>
            <input type="submit" value="save">
        </form>
</div>
    <br>
    <br>


<div class="search">
        <h2>Search</h2>
        <form action="/search/list" method="get">
            <input type="text" name="search" id="search">
            <button type="submit">search</button>
        </form>
</div>

    {{-- <div class="customers">
        @foreach ($customers as $customer)
        <ul>
            <li>
                {{$customer->first_name}}  {{$customer->surname}}
            </li>
        </ul>
            
        @endforeach --}}
    </div>
</body>
</html>