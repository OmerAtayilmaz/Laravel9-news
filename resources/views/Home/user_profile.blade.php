@extends('layouts.main')
@section('title',"Anasayfa")
@section('description',"asdadasd")
@section('keywords',"asdasds")
@section('content')
    <div class="col-md-4">
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
</div>
    </div>
    <div class="col-md-8">
        <!-- DASH -->
        @include('dashboard')
    </div>
   
@endsection