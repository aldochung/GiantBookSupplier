@extends('layouts.NavigationBar')

@section('headings')
    <div class="p-3 mb-2 bg-secondary text-white">
        <h2>{{$publisherData->name}}</h2>
        <h2>Address = {{$publisherData->address}}</h2>
        <h2>Phone = {{$publisherData->phone}}</h2>
        <h2>Email = {{$publisherData->email}}</h2>
    </div>
    <div class="card-deck">
        @foreach ($publisherBook as $book)
            <div class="card">
                <img class="card-img-top" src="{{asset($book->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">by</p>
                    <p>{{$book->author}}</p>
                    <a href="/BookDetail/{{$book->id}}" class="btn btn-primary">View Book</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection