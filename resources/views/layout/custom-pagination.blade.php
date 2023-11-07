<div class="d-flex flex-stack flex-wrap pt-10">
   <div class="fs-6 fw-semibold text-gray-700">
       Showing 1 to 10 of 50 entries
   </div>

   <!--begin::Pages-->
   <ul class="pagination">
       <li class="page-item previous">
           <a href="{{ $paginator->previousPageUrl() }}" class="page-link"><i class="previous"></i></a>
       </li>

       @foreach ($elements as $element)
           @if (is_array($element))
               @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                      <li class="page-item active">
                          <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                      </li>
                  @else
                      <li class="page-item">
                          <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                      </li>
                  @endif
               @endforeach
           @endif
       @endforeach

       <li class="page-item next">
           <a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="next"></i></a>
       </li>
   </ul>
   <!--end::Pages-->
</div>
