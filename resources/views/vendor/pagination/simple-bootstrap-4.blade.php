@if ($paginator->hasPages())

    <nav>
    <div class="blog-pagination">
        <ul class="justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="icofont-rounded-left" aria-hidden="true" ></a>
                </li>
            @else
                <li class="page-item">
                    <a class="icofont-rounded-left" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"></a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="icofont-rounded-right" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"></a>
                </li>
            @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="icofont-rounded-right" aria-hidden="true" ></a>
                </li>
            @endif
        </ul>
    </div>
 </nav>

@endif
