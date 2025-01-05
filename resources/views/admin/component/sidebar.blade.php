<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{url('dashboard')}}">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Master Laporan
            </li>

            @foreach($sideBarMenu as $menu)
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{$menu['href']}}">
                        <i class="align-middle bi bi-{{$menu['icon']}}"></i> <span class="align-middle">{{$menu['text']}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
