@extends('layouts.admin')

@section('content')
<div class="col-12">
      
      <div class="bg-light rounded h-100 p-4">
         <h6 class="mb-4">News</h6>
         <div class="table-responsive bg-dark">
             <table class="table text-white">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">name</th>
                         <th scope="col">email</th>
                         <th scope="col">ip</th>
                         <th scope="col">phone</th>
                         <th scope="col">Created At</th>
                         <th scope="col">Edit</th>
                     </tr>
                 </thead>
                 <tbody >
                 @foreach($messageList as $message)
                 <tr>
                         <th scope="row">{{$message->id??"Undefined"}}</th>
                         <td>{{$message->name }} </td>
                         <td>  {{ $message->email??"Undefined" }}</td>
                         <td>  {{ $message->ip??"Undefined" }}</td>
                         <td>  {{ $message->phone??"Undefined" }}</td>
                         <td>  {{ $message->updated_at??"Undefined" }}</td>
                         <td>
                       <div class="btn-group" role="group">
                             <a  href="{{route('admin_message_delete',['id'=>$message->id])}}" type="button" class="btn btn-danger">Remove</a>
                             <a  href="{{route('admin_home',['id'=>$message->id])}}" type="button" class="btn btn-primary">Edit</a>
                             <a  href="$" type="button" class="btn btn-warning">Show</a>
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

