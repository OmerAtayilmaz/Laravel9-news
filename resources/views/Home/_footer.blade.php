<div class="container-fluid fh5co_footer_bg pb-3">
            <div class="container animate-box">
                <div class="row">
                    <div class="col-12 spdp_right py-5">
                        <img
                            src="{{asset('assets')}}/images/logo.png"
                            alt="img"
                            class="footer_logo"
                        />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="footer_main_title py-3">About</div>
                        <div class="footer_sub_about pb-3">
                            {{$data->description}}
                        </div>
                        <div class="footer_mediya_icon">
                            @foreach($socialmedia as $account)
                            <div class="text-center d-inline-block">
                                <a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle">
                                        <img width="32px" src="{{Storage::url($account->image)}}"/>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="footer_main_title py-3">Category</div>
                        <ul class="footer_menu">
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Business</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Entertainment</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Environment</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Health</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Life style</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Politics</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; Technology</a
                                >
                            </li>
                            <li>
                                <a href="#" class=""
                                    ><i class="fa fa-angle-right"></i
                                    >&nbsp;&nbsp; World</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div
                        class="col-12 col-md-5 col-lg-3 position_footer_relative"
                    >
                        <div class="footer_main_title py-3">
                            Most Viewed Posts
                        </div>
                        <div class="footer_makes_sub_font">Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4">
                            Success is not a good teacher failure makes you
                            humble
                        </a>
                        <div class="footer_makes_sub_font">Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4">
                            Success is not a good teacher failure makes you
                            humble
                        </a>
                        <div class="footer_makes_sub_font">Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4">
                            Success is not a good teacher failure makes you
                            humble
                        </a>
                        <div class="footer_position_absolute">
                            <img
                                src="{{asset('assets')}}/images/footer_sub_tipik.png"
                                alt="img"
                                class="width_footer_sub_img"
                            />
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="footer_main_title py-3">
                            About Us
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span>Company:</span> {{$data->company}}
                            </li>
                            <li class="list-group-item">
                                <span>Adress:</span> {{$data->adress}}
                            </li>
                            <li class="list-group-item">
                                <span>Phone:</span> {{$data->phone}}
                            </li>
                            <li class="list-group-item">
                                <span>Fax:</span> {{$data->fax}}
                            </li>
                            <li class="list-group-item">
                                <span>Email:</span> {{$data->email}}
                            </li>
                   
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center pt-2 pb-4">
                    <div class="col-12 col-md-8 col-lg-7">
                        <div class="input-group">
                            <span
                                class="input-group-addon fh5co_footer_text_box"
                                id="basic-addon1"
                                ><i class="fa fa-envelope"></i
                            ></span>
                            <input
                                type="text"
                                class="form-control fh5co_footer_text_box"
                                placeholder="Enter your email..."
                                aria-describedby="basic-addon1"
                            />
                            <a
                                href="#"
                                class="input-group-addon fh5co_footer_subcribe"
                                id="basic-addon12"
                            >
                                <i class="fa fa-paper-plane-o"></i
                                >&nbsp;&nbsp;Subscribe</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fh5co_footer_right_reserved">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 py-4 Reserved">
                        © Copyright 2018, All rights reserved.

                        <a
                            href="https://atayilmazbilisim.tech"
                            title="Ömer Atayilmaz"
                            author="Ömer Atayilmaz"
                            >{{$data->company}}</a
                        >
                    </div>
                    <div class="col-12 col-md-6 spdp_right py-4">
                        <a href="#" class="footer_last_part_menu">Home</a>
                        <a href="Contact_us.html" class="footer_last_part_menu"
                            >About</a
                        >
                        <a href="Contact_us.html" class="footer_last_part_menu"
                            >Contact</a
                        >
                        <a href="blog.html" class="footer_last_part_menu"
                            >Latest News</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>
       