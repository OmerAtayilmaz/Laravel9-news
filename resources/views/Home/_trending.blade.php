<div class="container-fluid pt-3">
            <div class="container animate-box" data-animate-effect="fadeIn">
                <div>
                    <div
                        class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"
                    >
                        Lastest
                    </div>
                </div>
                <div class="owl-carousel owl-theme js" id="slider1">
                    @foreach($news as $new)
                    <div class="item px-2">
                        <div class="fh5co_latest_trading_img_position_relative">
                            <div class="fh5co_latest_trading_img">
                                <img
                                    src="{{Storage::url($new->image)}}"
                                    alt="{{$new->description}}"
                                    class="fh5co_img_special_relative"
                                />
                            </div>
                            <div
                                class="fh5co_latest_trading_img_position_absolute"
                            ></div>
                            <div
                                class="fh5co_latest_trading_img_position_absolute_1"
                            >
                                <a href="{{route('news',['id'=>$new->id,'slug'=>$new->slug])}}" class="text-white">
                                    {{$new->title}}
                                </a>
                                <div
                                    class="fh5co_latest_trading_date_and_name_color"
                                >
                                    Walter Johson -{{  strftime("%d %b %Y",strtotime($new->updated_at)) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>