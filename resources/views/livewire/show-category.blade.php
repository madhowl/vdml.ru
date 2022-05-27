<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h2>Livewire Category</h2>

    @foreach($parentCategories as $taxonomy)
        <ul>
            <li><a href="#">{{$taxonomy->title}}</a></li>
            @if(count($taxonomy->subcategory))
                @include('categories.sub_category_list',['subcategories' => $taxonomy->subcategory])
            @endif
        </ul>
    @endforeach

</div>
