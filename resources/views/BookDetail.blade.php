@extends('layouts.NavigationBar')

@section('headings')
    <div class="ml-5">
        <img src="{{asset($bookDetail->image)}}"width="700" height="900" class="rounded mx-auto d-block" alt="...">
        <h3 class="mt-5">Title      :   {{$bookDetail->title}}</h3>
        <h3 class="mt-5">Author     :   {{$bookDetail->author}}</h3>
        <h3 class="mt-5">Publisher  :   {{$publisherData->name}}</h3>
        <h3 class="mt-5">Synopsis   :   {{$bookDetail->synopsis}}</h3>
    </div>
    
@endsection
