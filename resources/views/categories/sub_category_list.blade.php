@foreach($subcategories as $subcategory)
    <ul>
        <li>&nbsp; - &nbsp;<a href="#">{{$subcategory->title}}</li>
        @if(count($subcategory->subcategory))
            @include('categories.sub_category_list',['subcategories' => $subcategory->subcategory])
        @endif
    </ul>
@endforeach
