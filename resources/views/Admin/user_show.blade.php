
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
<div class="table-responsive p-5">
        <h4 class="text-center">{{ucfirst($user->name)}}'s Details</h4>    
        <table class="table ">
                 <thead>
                     <tr>
                         <th scope="col">id</th>                         
                         <td scope="row">{{$user->id??"Undefined"}}</td>
                    </tr>
                    <tr>
                         <th scope="col">Profile</th>                         
                         <td scope="row"><img width="40" src="{{Storage::url($user->profile_photo_path)}}"/></td>
                    </tr>
                    <tr>
                         <th scope="col">Name</th>                         
                         <td scope="row">{{$user->name??"Undefined"}}</td>
                    </tr>
                    <tr>
                         <th scope="col">Email</th>                         
                         <td scope="row">{{$user->email??"Undefined"}}</td>
                    </tr>
                    <tr>
                         <th scope="col">Roles</th>                         
                         <td scope="row">@foreach($user->roles as $role) {{$role->name}}, @endforeach</td>
                    </tr>
                 </thead>
        </table>
</div>