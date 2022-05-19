@extends('layouts.main')
@section('title','Haber Detayı')
@section('content')

@include('home._single',['imageList'=>$imageList])
@endsection
