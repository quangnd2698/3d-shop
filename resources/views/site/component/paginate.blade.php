
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            @if ($paginator->hasPages())
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true"><i class='bx bxs-chevrons-left' style="font-size: 1.2rem"></i></span>
                        </li>
                    @else
                        <li class="page-item">
                            <button type="button"
                                dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                                class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                wire:loading.attr="disabled" rel="prev"
                                aria-label="@lang('pagination.previous')"><i class='bx bxs-chevrons-left' style="font-size: 1.2rem"></i></button>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span
                                    class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active"
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"
                                        aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                                        <button type="button" class="page-link"
                                            wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <button type="button"
                                dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                                class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                wire:loading.attr="disabled" rel="next"
                                aria-label="@lang('pagination.next')"><i class='bx bxs-chevrons-right' style="font-size: 1.2rem"></i></button>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true"><i class='bx bxs-chevrons-right' style="font-size: 1.2rem"></i></span>
                        </li>
                    @endif
                </ul>
            @endif
        </div>