<div class="sidebar-menu ">
    <ul class="menu mt-0">
        @foreach (filterAdminMenu(getJSONFile('admin_menu')) as $item)
            @if (getProperty($item, 'lis') != null)
                <li class="sidebar-item {{ activePage(getProperty($item, 'route')) }}  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="{{ getProperty($item, 'icon') }}"></i>
                        <span>{{ getProperty($item, 'name_fa') }}</span>
                    </a>
                    <ul class="submenu " @if (activePage(getProperty($item, 'route'), true)) style="display: block" @endif>
                        @foreach (getProperty($item, 'lis') as $li)
                            <li class="submenu-item  {{ activePage(getProperty($li, 'route')) }} ">
                                <a href="{{ route(getProperty($li, 'route')) }}">
                                    <i class="{{ getProperty($li, 'icon') }}"></i>
                                    <span class="me-2">{{ getProperty($li, 'name_fa') }}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="sidebar-item  {{ activePage(getProperty($item, 'route')) }}">
                    <a href="{{ route(getProperty($item, 'route')) }}" class='sidebar-link'>
                        <i class="{{ getProperty($item, 'icon') }}"></i>
                        <span>{{ getProperty($item, 'name_fa') }}</span>
                    </a>
                </li>
            @endif
        @endforeach



    </ul>
</div>
