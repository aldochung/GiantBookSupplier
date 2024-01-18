@extends('layouts.NavigationBar')

@section('headings')

     <h2 class="p-3 mb-2 bg-secondary text-white">Book List</h2>
    <div class="card-deck">
        @foreach ($bookList as $Books)
            <div class="card">
                <img class="card-img-top" src="{{asset($Books->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$Books->title}}</h5>
                    <p class="card-text">by</p>
                    <p>{{$Books->author}}</p>
                    <a href="/BookDetail/{{$Books->id}}" class="btn btn-primary">View Book</a>
                </div>
            </div>
        @endforeach
     </div>

   
@endsection 

    

