@if ($paginator->hasPages())
    <ul>
        @if ($paginator->onFirstPage())
            <li>
                <a disabled
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 17.506 30.903"
                    >
                        <path
                            id="Stroke_3"
                            data-name="Stroke 3"
                            d="M0,0,12.623,12.678,25.246,0"
                            transform="translate(14.678 2.828) rotate(90)"
                            fill="none"
                            stroke=""
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            stroke-width="4"
                        />
                    </svg>
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 17.506 30.903"
                    >
                        <path
                            id="Stroke_3"
                            data-name="Stroke 3"
                            d="M0,0,12.623,12.678,25.246,0"
                            transform="translate(14.678 2.828) rotate(90)"
                            fill="none"
                            stroke=""
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            stroke-width="4"
                        />
                    </svg>
                </a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
                <li><a href="#">1</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li style=""><a style="background: #A956F1;color: white;" href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 17.506 30.903"
                    >
                        <path
                            id="Stroke_3"
                            data-name="Stroke 3"
                            d="M0,0,12.623,12.678,25.246,0"
                            transform="translate(14.678 2.828) rotate(90)"
                            fill="none"
                            stroke=""
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            stroke-width="4"
                        />
                    </svg>
                </a>
            </li>
        @else
            <li>
                <a disabled
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 17.506 30.903"
                    >
                        <path
                            id="Stroke_3"
                            data-name="Stroke 3"
                            d="M0,0,12.623,12.678,25.246,0"
                            transform="translate(14.678 2.828) rotate(90)"
                            fill="none"
                            stroke=""
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            stroke-width="4"
                        />
                    </svg>
                </a>
            </li>
        @endif

    </ul>
@endif
