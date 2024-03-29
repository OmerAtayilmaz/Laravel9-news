<div class="container-fluid pb-4 pt-5">
            <div class="container animate-box">
                <div>
                    <div
                        class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"
                    >
                    {{$category}}
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="slider2">
                    @foreach ($news as $item)
                        @if($item->category->title==$category)
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img">
                                    <img src="{{Storage::url($item->image)}}" alt="" />
                                </div>
                                <div>
                                    <a
                                        href="{{route('news',['id'=>$item->id,'slug'=>$item->slug])}}"
                                        class="d-block fh5co_small_post_heading"
                                        ><span class=""
                                            >{{$item->title}}</span
                                        ></a
                                    >
                                    <div class="c_g">
                                        <i class="fa fa-clock-o"></i> {{  strftime("%d %b %Y",strtotime($item->updated_at)) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                </div>
            </div>
        </div>