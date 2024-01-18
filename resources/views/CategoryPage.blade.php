@extends('layouts.NavigationBar')

@section('headings')
    <h2 class="p-3 mb-2 bg-secondary text-white">{{$categoryName->name}}</h2>
    <div class="card-deck">
        @foreach ($category as $book)
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

