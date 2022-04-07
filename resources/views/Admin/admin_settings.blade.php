@include('admin._admin-head')

<div class="container-xxl position-relative bg-white d-flex p-0">
<!-- spinner -->
@include('admin._admin-spinner')
@include('admin._admin-sidebar')
<div class="content">
    @include('admin._admin-navbar')
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_settings_update')}}" method="post" class="bg-light rounded h-100 p-4" enctype="multipart/form-data">
                @csrf
                    <h6 class="mb-4">Settings</h6>
                    <input type="hidden" name="id" value="" class="form-control"/>
                    <div class="form-floating mb-3">
                            <input name="title" value="" type="text" class="form-control" id="title">
                            <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="keywords" value="" type="text" class="form-control" id="keywords">
                            <label for="keywords">Keywords</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="description" value="" type="text" class="form-control" id="description">
                            <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="company" value="" type="text" class="form-control" id="company">
                            <label for="company">Company</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="phone" value="" type="text" class="form-control" id="phone">
                            <label for="phone">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="fax" value="" type="text" class="form-control" id="fax">
                            <label for="fax">Fax</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="email" value="" type="text" class="form-control" id="email">
                            <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                                <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                    </div> 
                    <!-- smtp  -->
                    <div class="form-floating mb-3">
                            <input name="smtpserver" value="" type="text" class="form-control" id="smtpserver">
                            <label for="smtpserver">Server</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="smtpemail" value="" type="text" class="form-control" id="smtpemail">
                            <label for="smtpemail">Smtpemail</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="smtppassword" value="" type="text" class="form-control" id="smtppassword">
                            <label for="smtppassword">Smtppassword</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="smtpport" value="" type="text" class="form-control" id="smtpport">
                            <label for="smtpport">Smtpport</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3" name="adress"  id="adress" style="height: 150px;"></textarea>
                        <label for="adress">Adress</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3" name="description"  id="description" style="height: 150px;"></textarea>
                        <label for="description">description</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3" name="references"  id="references" style="height: 150px;"></textarea>
                        <label for="references">references</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3" name="description"  id="description" style="height: 150px;"></textarea>
                        <label for="description">description</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3" name="contact"  id="contact" style="height: 150px;"></textarea>
                        <label for="contact">contact</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3" name="aboutus"  id="aboutus" style="height: 150px;"></textarea>
                        <label for="aboutus">aboutus</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
            </form>
    </div>
</div>
</div>
<a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/lib/chart/chart.min.js"></script>
    <script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('assets')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('assets')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('assets')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets')}}/js/admin-main.js"></script>
</body>
</html>
