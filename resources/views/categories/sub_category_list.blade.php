@foreach($subcategories as $subcategory)
    <ul>
        <li>&nbsp; - &nbsp;<a href="#">{{$subcategory->name}}</li>
        @if(count($subcategory->parent_id))
            @include('categories.sub_category_list',['subcategories' => $subcategory->subcategory])
        @endif
    </ul>
@endforeach
