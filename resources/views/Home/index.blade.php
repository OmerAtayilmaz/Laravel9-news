@extends('layouts.main')
@section('title',"Ampulhaber")
@section('content')
    @include('home._content')
    @include('home._trending')
    @include('home._newsSlider')
    @include('home._news')
@endsection