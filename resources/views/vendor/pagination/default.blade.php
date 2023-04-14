@if ($paginator->hasPages())
{{--    Custom default component--}}
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center">
        <span class="relative z-0 inline-flex shadow-sm rounded-md">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span class="border-blue-400 border-solid relative inline-flex items-center px-1 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="border-blue-400 border-solid relative inline-flex items-center px-1 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @if($paginator->currentPage() > 2)
                <a href="{{ $paginator->url(1) }}" class="border-blue-400 border-solid relative inline-flex items-center px-3 py-2 -ml-px text-sm font-medium text-success bg-white border border-gray-300 leading-5 hover:text-black hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => 1]) }}">
                    1
                </a>
            @endif
            @if($paginator->currentPage() > 3)
                {{-- "Three Dots" Separator --}}
                <span aria-disabled="true">
                    <span class="border-blue-400 border-solid relative inline-flex items-center p-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">...</span>
                </span>
            @endif
            @foreach(range(1, $paginator->lastPage()) as $i)
                @if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
                    @if ($i == $paginator->currentPage())
                        <span aria-current="page">
                            <span class="border-blue-400 bg-blue-400 border-solid relative inline-flex items-center px-3 py-2 -ml-px text-sm font-medium badge-success border border-gray-300 cursor-default leading-5">{{ $i }}</span>
                        </span>
                    @else
                        <a href="{{ $paginator->url($i) }}" class="border-blue-400 border-solid relative inline-flex items-center px-3 py-2 -ml-px text-sm font-medium text-success bg-white border border-gray-300 leading-5 hover:text-black hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $i]) }}">
                            {{ $i }}
                        </a>
                    @endif
                @endif
            @endforeach
            @if($paginator->currentPage() < $paginator->lastPage() - 2)
                {{-- "Three Dots" Separator --}}
                <span aria-disabled="true">
                    <span class="border-blue-400 border-solid relative inline-flex items-center p-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">...</span>
                </span>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 1)
                <a href="{{ $paginator->url($paginator->lastPage()) }}" class="border-blue-400 border-solid relative inline-flex items-center px-3 py-2 -ml-px text-sm font-medium text-success bg-white border border-gray-300 leading-5 hover:text-black hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $paginator->lastPage()]) }}">
                    {{ $paginator->lastPage() }}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ \Request::url().'?page='.$paginator->lastPage() }}" rel="last" aria-label="@lang('pagination.last')" rel="next" class="border-blue-400 border-solid relative inline-flex items-center px-1 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            @else
                <span aria-disabled="true" aria-label="@lang('pagination.last')">
                    <span class="border-blue-400 border-solid relative inline-flex items-center px-1 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md leading-5" aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
            @endif
        
        </span>
    </nav>
@endif 