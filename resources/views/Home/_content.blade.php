  <div class="container-fluid paddding mb-5">
            <div class="row mx-0">
                <div
                    class="col-md-6 col-12 paddding animate-box"
                    data-animate-effect="fadeIn"
                >
                    <div class="fh5co_suceefh5co_height">
                        <img src="{{Storage::url($lastestNew->image)}}" alt="img" />
                        <div
                            class="fh5co_suceefh5co_height_position_absolute"
                        ></div>
                        <div
                            class="fh5co_suceefh5co_height_position_absolute_font"
                        >
                            <div class="">
                                <a href="#" class="color_fff">
                                    <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                    {{  strftime("%d %b %Y",strtotime($lastestNew->updated_at)) }}
                                </a>
                            </div>
                            <div class="">
                                <a href="{{route('news',['id'=>$lastestNew->id,'slug'=>$lastestNew->slug])}}" class="fh5co_good_font">
                                {{$lastestNew->title}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach($sliderDataList as $item)
                            <div
                                class="col-md-6 col-6 paddding animate-box"
                                data-animate-effect="fadeIn"
                            >
                                <div class="fh5co_suceefh5co_height_2">
                                    <img
                                        src="{{Storage::url($item->image)}}"
                                        alt="img"
                                    />
                                    <div
                                        class="fh5co_suceefh5co_height_position_absolute"
                                    ></div>
                                    <div
                                        class="fh5co_suceefh5co_height_position_absolute_font_2"
                                    >
                                        <div class="">
                                            <a href="#" class="color_fff">
                                                <i class="fa fa-clock-o"></i
                                                >&nbsp;&nbsp;{{  strftime("%d %b %Y",strtotime($item->updated_at)) }}
                                            </a>
                                        </div>
                                        <div class="">
                                            <a
                                                href="{{route('news',['id'=>$item->id,'slug'=>$item->slug])}}"
                                                class="fh5co_good_font_2"
                                            >
                                                {{$item->title}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>