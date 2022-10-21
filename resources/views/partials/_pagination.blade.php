<nav aria-label="Page navigation example" class="mt-2">
    <ul class="pagination justify-content-center">
        @if ($articles->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $articles->previousPageUrl() }}">Previous</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="{{ $articles->previousPageUrl() }}">Previous</a>
            </li>
        @endif
        @for ($page = 1; $page <= $articles->lastPage(); $page++)
            <li class="page-item">
                <a class="page-link"
                    href="{{ $articles->path() . '?' . $articles->getPageName() . '=' . $page }}">{{ $page }}</a>
            </li>
        @endfor
        @if ($articles->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
            </li>
        @endif
    </ul>
</nav>
