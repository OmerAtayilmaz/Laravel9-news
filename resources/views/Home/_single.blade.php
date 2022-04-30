<div class="single">
        <div
            id="fh5co-title-box"
            style="
                background-image: url({{Storage::url($new->image)}});
                background-position: 50% 90.5px;
            "
            data-stellar-background-ratio="0.5"
        >
            <div class="overlay"></div>
            <div class="page-title">
                <img
                    src="{{Storage::url($new->image)}}"
                    alt="Free HTML5 by FreeHTMl5.co"
                />
                <span>January 1, 2018</span>
                <h2>{{$new->title}}</h2>
            </div>
        </div>
        <div
            id="fh5co-single-content"
            class="container-fluid pb-4 pt-4 paddding"
        >
            <div class="container paddding">
                <div class="row mx-0">
                    <div
                        class="col-md-8 animate-box"
                        data-animate-effect="fadeInLeft"
                    >
                    <h3> {{$new->title}}</h3>
                        <p>
                            {!! $new->description !!}
                        </p>
                        <br>
                        <p>
                        {!! $new->detail !!}
                        </p>
                    
                        <hr>
                        <div class="container p-5">
                        @livewire('comment',['id'=>$new->id])
                        </div>
                      
                    </div>
                    <div
                        class="col-md-3 animate-box"
                        data-animate-effect="fadeInRight"
                    >
                        <div>
                            <div
                                class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"
                            >
                                Tags
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="fh5co_tags_all">
                            <a href="#" class="fh5co_tagg">Business</a>
                            <a href="#" class="fh5co_tagg">Technology</a>
                            <a href="#" class="fh5co_tagg">Sport</a>
                            <a href="#" class="fh5co_tagg">Art</a>
                            <a href="#" class="fh5co_tagg">Lifestyle</a>
                            <a href="#" class="fh5co_tagg">Three</a>
                            <a href="#" class="fh5co_tagg">Photography</a>
                            <a href="#" class="fh5co_tagg">Lifestyle</a>
                            <a href="#" class="fh5co_tagg">Art</a>
                            <a href="#" class="fh5co_tagg">Education</a>
                            <a href="#" class="fh5co_tagg">Social</a>
                            <a href="#" class="fh5co_tagg">Three</a>
                        </div>
                        <div>
                            <div
                                class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4"
                            >
                                Most Popular
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img
                                    src="{{$new??$new->image}}"
                                    alt="img"
                                    class="fh5co_most_trading"
                                />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font">
                                    Magna aliqua ut enim ad minim veniam quis
                                    nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123">
                                    April 18, 2016
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img
                                    src="{{asset('assets')}}/images/allef-vinicius-108153.jpg"
                                    alt="img"
                                    class="fh5co_most_trading"
                                />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font">
                                    Enim ad minim veniam nostrud xercitation
                                    ullamco.
                                </div>
                                <div class="most_fh5co_treding_font_123">
                                    April 18, 2016
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img
                                    src="{{asset('assets')}}/images/download (2).jpg"
                                    alt="img"
                                    class="fh5co_most_trading"
                                />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font">
                                    Magna aliqua ut enim ad minim veniam quis
                                    nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123">
                                    April 18, 2016
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img
                                    src="{{asset('assets')}}/images/seth-doyle-133175.jpg"
                                    alt="img"
                                    class="fh5co_most_trading"
                                />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font">
                                    Magna aliqua ut enim ad minim veniam quis
                                    nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123">
                                    April 18, 2016
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"
        ></script>
        <!-- Waypoints -->
        <script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
        <!-- Parallax -->
        <script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
        <!-- Main -->
        <script src="{{asset('assets')}}/js/main.js"></script>
        <script>
            if (
                !navigator.userAgent.match(
                    /Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i
                )
            ) {
                $(window).stellar();
            }
        </script>
    </div>