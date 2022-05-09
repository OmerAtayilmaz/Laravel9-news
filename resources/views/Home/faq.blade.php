@extends('layouts.main')
@section('title',"Contact Us")
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('content')

<h3 class="text-center mt-3">Frequently Asked Questions</h3>
<div class="accordion accordion-flush p-5" id="accordionFlushExample">
@foreach ($faq as $item)
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#test{{$item->id}}" aria-expanded="false" aria-controls="test{{$item->id}}">
      {{$item->question}}
      </button>
    </h2>
    <div id="test{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          {!! $item->answer !!}
      </div>
    </div>
</div>
@endforeach


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>