@if($pagination['allPages']!=1)
    <nav aria-label="Page navigation example" id="main-navigation-page">
        <ul class="pagination pagination-primary m-0" id="nav-page"
            style="direction: ltr;">
            @for($x=$pagination['start'];$x<=$pagination['end'];$x++)
                @if($pagination['start']>1 and $x==$pagination['start'])
                    <li class="page-item  ">
                        <a class="page-link"
                           href="{{route(getCurrentStructure('route_name'),array_merge($_GET,["page"=>$x]))}}"><</a>
                    </li>
                @endif
                <li class="page-item  @if($pagination['currentPage']==$x) active @endif">
                    <a class="page-link"
                       href="{{route(getCurrentStructure('route_name'),array_merge($_GET,["page"=>$x]))}}">{{$x}}</a>
                </li>
                    @if($pagination['allPages']!=$pagination['end'] and $x==$pagination['end'])
                        <li class="page-item  ">
                            <a class="page-link"
                               href="{{route(getCurrentStructure('route_name'),array_merge($_GET,["page"=>$x]))}}">></a>
                        </li>
                    @endif
            @endfor
        </ul>
    </nav>
@endif

