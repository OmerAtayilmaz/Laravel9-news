@extends('layouts.admin')

@section('content')
<div class="col-12">
      
      <div class="bg-light rounded h-100 p-4">
         <h6 class="mb-4">Frequently Asked Questions</h6>
         @include('home.messages')
         <a href="{{route('admin_faq_create')}}" class="btn btn-primary my-2 text-white">ADD QUESTION</a>
         <div class="table-responsive bg-dark">
             <table class="table text-white">
                 <thead>
                     <tr>
                         <th scope="col">id</th>
                         <th scope="col">position</th>
                         <th scope="col">question</th>
                         <th scope="col">answer</th>
                         <th scope="col">status</th>
                         <th scope="col">Actions</th>
                     </tr>
                 </thead>
                 <tbody >
                 @foreach($data as $item)
                 <tr>
                         <th scope="row">{{$item->id??"Undefined"}}</th>
                         <td>{{$item->position }} </td>
                         <td>{{$item->question }} </td>
                         <td>  {!! $item->answer??"Undefined" !!}</td>
                         <td>  {{ $item->status??"Undefined" }}</td>
                         <td>
                       <div class="btn-group" role="group">
                             <a  href="{{route('admin_faq_delete',['id'=>$item->id])}}" type="button" class="btn btn-danger">Remove</a>
                             <a  href="{{route('admin_faq_edit',['id'=>$item->id])}}" type="button" class="btn btn-primary" onclick="return !window.open(this.href,'targetTab','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500px,height=500px');">Edit</a>
                         </div> 
                         </td>
                     </tr>
                 @endforeach
 
                 </tbody>
             </table>
         </div>
     </div> 
</div>
@endsection

