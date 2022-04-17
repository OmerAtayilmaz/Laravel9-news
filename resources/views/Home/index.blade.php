@extends('layouts.main')
@section('title',"Anasayfa")
@section('description')
    Son dakika, doğru ve güvenilir haberin tek adresi!
@endsection
@section('content')
    @include('home._content')
    @include('home._trending')
    @include('home._newsSlider')
    @include('home._news')
@endsection