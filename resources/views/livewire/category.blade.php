<div>
    <ul>
    @foreach($categories as $category)
        <li>
            <a href="/category/{{$category->slug}}">
                {{$category->name}}
                <i class='bx bx-right-arrow-alt'></i>
            </a>
        </li>
        @endforeach
    </ul>
</div>
