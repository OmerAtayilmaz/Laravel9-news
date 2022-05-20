<div>
    @if(session()->has('message'))
        <div  class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
<form class="commend-form" wire:submit.prevent="store">
    @csrf
    <div class="form-group">
    @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
        <label for="comment">Comment</label>
        <textarea class="form-control" wire:model="comment" id="comment"></textarea>
    </div>
    <div class="form-group">
     @error('rate') <span class="text-danger">{{ $message }}</span> @enderror
        <label for="rate">Rate</label>
        <select class="form-control" wire:model="rate" id="rate">
            <option  value="1.5" selected>★</option>
            <option  value="2">★★</option>
            <option  value="3">★★★</option>
            <option  value="4">★★★★</option>
            <option  value="5">★★★★★</option>
        </select>

    </div>
    @auth
    <button type="submit" class="nav-link bg-warning text-white text-center" value="Save">Comment
    <span class="sr-only">(current)</span></button>
    @else
    <a class="nav-link bg-warning text-white text-center" href="{{route('login')}}">Please Login for Comment to News
    <span class="sr-only">(current)</span></a>
    @endauth
</from>
</div>
