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
    <h2>Search</h2>
    <form action="/search" method="get">
        <input type="text" name="search" id="search">
        <button type="submit">search</button>
    </form>
    <br>
    @foreach ($results as $result)
    <ul>
        <li>
            <a class="person_detail" href="/search/list/details/{{$result->id}}">{{$result->first_name}} {{$result->surname}}</a>

        </li>
    </ul>
        
    @endforeach


</body>
</html>