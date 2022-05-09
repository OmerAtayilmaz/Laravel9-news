@extends('layouts.admin')
@section('content')
    <div class="w-100 h-auto">
   
            <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" class="bg-light rounded h-100 p-4" enctype="multipart/form-data">
                @csrf
                    <h6 class="mb-4">Edit News</h6>
                    @include('home.messages')
                    <div class="form-floating mb-3">
                            <input name="position" value="{{$data->position}}" type="text" class="form-control" id="position">
                            <label for="position">Position</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="question"  value="{{$data->question}}" type="text" class="form-control" id="question">
                            <label for="question">Question</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="answer"  value="{{$data->answer}}" type="text" class="form-control" id="answer">
                            <label for="answer">Answer</label>
                    </div>  
                    <div class="form-floating mb-3">
                    <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="1" {{ $data->status==1? "selected" : null }}>True</option>
                                    <option value="0" {{ $data->status==0? "selected" : null }}>False</option>
                                </select>
                                <label for="floatingSelect">Status</label>
                    </div>   
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
            </form>
    </div>
@endsection
