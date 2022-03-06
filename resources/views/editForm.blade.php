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
        <h2>Edit customer</h2>
        <form action="{{ action('App\Http\Controllers\VeterinaryController@update', ['id' => $details->id]) }}" method="POST">
            
            @csrf
            @method('PUT')
            <input type="hidden" name="id">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" value="{{$details->first_name}}" required>

            <label for="">Surname</label>
            <input type="text" name="surname" value="{{$details->surname}}" required>

            <label for="">Email</label>
            <input type="text" name="email" value="{{$details->email}}">
            <label for="">Phone</label>
            <input type="text" name="phone" value="{{$details->phone}}">
            <label for="">Address</label>
            <input type="text" name="address" value="{{$details->address}}">
            <input type="submit" value="update">
        </form>
</div>
    <br>
    <br>
    
</body>
</html>