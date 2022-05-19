@extends('layouts.admin')

@section('content')
<div class="col-12  bg-light">
      
      <div class="bg-light rounded h-100 p-4">
         <h6 class="mb-4">Contact Messages</h6>
         @include('home.messages')
         <div class="table-responsive bg-dark">
             <table class="table text-white">
                 <thead>
                     <tr>
                         <th scope="col">id</th>
                         <th scope="col">name</th>
                         <th scope="col">email</th>
                         <th scope="col">ip</th>
                         <th scope="col">phone</th>
                         <th scope="col">Subject</th>
                         <th scope="col">Admin Note</th>
                         <th scope="col">Actions</th>
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
                         <td>  {{ $message->subject??"Undefined" }}</td>
                         <td>  {{ $message->note??"Undefined" }}</td>
                         <td>
                       <div class="btn-group" role="group">
                             <a  href="{{route('admin_message_delete',['id'=>$message->id])}}" type="button" class="btn btn-danger">Remove</a>
                             <a  href="{{route('admin_message_edit',['id'=>$message->id])}}" type="button" class="btn btn-primary" onclick="return !window.open(this.href,'targetTab','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500px,height=500px');">Edit</a>
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

