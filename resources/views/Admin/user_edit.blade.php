
    <link href="{{asset('assets')}}/images/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

<div class="table-responsive">
@include('home.messages')
        <form method="post" role="form" enctype="multipart/form-data" action="{{route('admin_user_update',['id'=>$user->id])}}">
            @csrf     
        <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">id</th>                         
                         <td scope="row">{{$user->id??"Undefined"}}</td>
                    </tr>
                     <tr>
                         <th scope="col">Name</th>
                         <td><input type="text" name="name" class="form-control" value="{{$user->name}}"/> </td>
                    </tr>
                     <tr>
                         <th scope="col">Email</th>
                         <td><input type="text" class="form-control" name="email" value="{{$user->email}}"/> </td>
                    </tr>
                     <tr>
                         <th scope="col">Adress</th>
                         <td><input type="text" class="form-control" name="adress" value="{{$user->adress}}"/> </td>
                    </tr>
                     <tr>
                         <th scope="col">Profile Image</th>
                         <td>
                         <div class="form-floating mb-3">
                            <div class="mb-3">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>  
                             <image  width="80" src="{{Storage::url($user->profile_photo_path)}}"/>
                        </td>
                    </tr>
                    <tr>
                    <th scope="col">Status</th>
                    <td>
                    <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="1" {{ $user->status==1? "selected" : null }}>True</option>
                                    <option value="0" {{ $user->status==0? "selected" : null }}>False</option>
                                </select>
                                </td>
                    </tr>
                     <tr>
                         <th scope="col">admin note</th>
                         <td>
                             <button type="Submit" class="btn btn-info">Update</button>
                        </td>
                    </tr>
                 </thead>
             </table>
        </form>
</div>