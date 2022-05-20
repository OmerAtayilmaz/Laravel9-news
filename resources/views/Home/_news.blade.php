<div class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div
                        class="col-md-8 animate-box"
                        data-animate-effect="fadeInLeft"
                    >
                        <div>
                            <div
                                class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"
                            >
                                {{$category}}
                            </div>
                        </div>
                        @foreach($news as $item)
                        @if($item->category->title==$category)
                            <div class="row pb-4">
                                <div class="col-md-5">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img">
                                            <img
                                                src="{{Storage::url($item->image)}}"
                                                alt=""
                                            />
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-7 animate-box">
                                    <a href="{{route('news',['id'=>$item->id,'slug'=>$item->slug])}}" class="fh5co_magna py-2">
                                        {{$item->title}}
                                    </a>
                                    <a
                                        href="{{route('news',['id'=>$item->id,'slug'=>$item->slug])}}"
                                        class="fh5co_mini_time py-3"
                                    >
                                        Thomson Smith - {{  strftime("%d %b %Y",strtotime($item->updated_at)) }}
                                    </a>
                                    <div class="fh5co_consectetur">
                                    Short Description
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
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
                            @foreach($categoryList as $currentCategory)
                            <a href="{{route('news_category',['id'=>$currentCategory->id,'slug'=>$currentCategory->slug])}}" class="fh5co_tagg">{{$currentCategory->title}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
             
            </div>
        </div>