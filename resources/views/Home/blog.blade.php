@extends('layouts.main')
@section('title',"Blog")
@section('content')
    @include('home._news')
    @include('home._trending')
@endsection