@extends('layouts.main')
@section('title','Page Title')

@section('navbar')
    <p>navbar üstü</p>
    @parent
    <p>navbar altı</p>
@endsection
@section('sidebar')
    <p>some sidebar problems</p>
    @parent

    <p>This is append to the master sidebar</p>
@endsection
@section('content')
    This is my first laravel page with HTML!!
    <a href="/">return to main page </a>
    <a href="{{route('gundem',['uridata'=>'datacomefromuri'])}}">to ekonomi page</a>
@endsection