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
 <div class="detail_div">
     <div class="customer">
            <h3>{{$details->first_name}} {{$details->surname}}</h3>
            <p><strong>phone: </strong><span>{{$details->phone}}</span></p>
            <p><strong>email: </strong><span>{{$details->email}}</span></p>
            <p><strong>address: </strong><span>{{$details->address}}</span></p>
            <br>
<div class="buttons">
                <a class="edit" href="{{ url('edit/' . $details->id)}}">EDIT</a>
                <br>
                <br>
                <form action="{{ action('App\Http\Controllers\VeterinaryController@delete', ['id' => $details->id]) }}" method ="post">
                    
                    @csrf
            
                    @method('DELETE')
                    <input type="submit" value="delete">
            
            
                </form>
</div>
     </div>
    
    
    
        
        @foreach ($details->animals as $animal)
    {{-- 
        {{dd($details)}} --}}
    
    <div class="pet_div">
            
            <img class="pet_image" src="/images/pets/{{$animal->image->path}}" alt="image">
        

            {{-- @foreach($details->) --}}
        
        
        <div class="pet_info">
            <h3><strong>Pet name: </strong><span>{{$animal->name}}</span></h3>
                <p><strong>Age: </strong><span>{{$animal->age}}</span></p>
                <p><strong>Weight: </strong><span>{{$animal->weight}} pounds</span></p>
                <p><strong>Breed: </strong><span>{{$animal->breed}}</span></p>
                <p><strong>Species: </strong><span>{{$animal->species}}</span></p>
        </div>
    </div>
            
        @endforeach
        
 </div>
</body>
</html> 