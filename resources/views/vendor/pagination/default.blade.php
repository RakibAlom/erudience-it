
{{-- Pagination System --}}
@if ($paginator->hasPages())
  <nav>
    <ul class="pagination justify-content-center mt-4">
      @if (!$paginator->onFirstPage())
         <li class="page-item ">
          <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
       @endif

       @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled"><a href="#">{{ $element }}</a></li>
        @endif

        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">{{ $page }}</a>
              </li>
            @else
              <li class="page-item ">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
              </li>
            @endif
          @endforeach
        @endif
      @endforeach

      @if ($paginator->hasMorePages())
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
          <span aria-hidden="true">»</span>
        </a>
      </li>
      @endif

    </ul>
  </nav>
@endif
