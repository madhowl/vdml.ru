<div>
    <ul>
    @foreach($categories as $category)
        <li>
            <div class="cmn-btn">
                <a class="banner-btn-left" href="/category/{{$category->slug}}">
                {{$category->name}}

            </a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
