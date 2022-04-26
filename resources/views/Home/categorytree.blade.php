@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <h6 class="dropdown-header">{{$subcategory->title}}</h6>
        @include('home.categorytree',['children' => $subcategory->children])
    @else
   <a class="dropdown-item" href="{{route('news_category',['id'=>$category->id,'slug'=>$category->slug])}}">{{$subcategory->title}}</a>
    @endif
@endforeach
                            