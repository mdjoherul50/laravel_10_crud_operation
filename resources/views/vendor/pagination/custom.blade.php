@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link" aria-label="@lang('pagination.previous')">
                    <i class="previous">Previous</i>
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">
                    <i class="previous">Previous</i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @if ($paginator->currentPage() > 3)
            <li class="page-item disabled">
                <span class="page-link">1</span>
            </li>
            @if ($paginator->currentPage() > 4)
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
            @endif
        @endif

        @foreach (range(1, $paginator->lastPage()) as $i)
            @if ($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $i }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endif
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="@lang('pagination.next')">
                    <i class="next">Next</i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link" aria-label="@lang('pagination.next')">
                    <i class="next">Next</i>
                </span>
            </li>
        @endif
    </ul>
@endif
