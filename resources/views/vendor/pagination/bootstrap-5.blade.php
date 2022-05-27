
    @if ($paginator->hasPages())
    <nav class="pagination-nav">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination justify-content-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li aria-disabled="true">
                        <a class="disabled active prev">@lang('pagination.previous')</a>
                    </li>
                @else
                    <li >
                        <a class="active prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a class="active next" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li aria-disabled="true">
                        <a class="disabled active next ">@lang('pagination.next')</a>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li  aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <a class="disabled active prev" aria-hidden="true"><i class="fa fa-arrow-left fa-lg"></i></a>
                        </li>
                    @else
                        <li >
                            <a  class="active prev" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-arrow-left fa-lg"></i></a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li  aria-disabled="true"><a class="disabled active">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li aria-current="page"><a class="active">{{ $page }}</a></li>
                                @else
                                    <li><a class="" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li >
                            <a class="active next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-arrow-right fa-lg"></i></a>
                        </li>
                    @else
                        <li class= aria-disabled="true" aria-label="@lang('pagination.next')">
                            <a class="disabled active next" aria-hidden="true" >
                                <i class="fa fa-arrow-right fa-lg"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif

