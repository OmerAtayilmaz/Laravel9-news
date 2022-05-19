@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <h6> <a class="dropdown-item" href="{{route('news_category',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}"><strong>{{$subcategory->title}}</strong></a></h6>
        @include('home.categorytree',['children' => $subcategory->children])
    @else
   <a class="dropdown-item" href="{{route('news_category',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a>
    @endif
@endforeach
                            