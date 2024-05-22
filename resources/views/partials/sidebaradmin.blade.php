<div class="container-fluid">
    {{-- SIDE BARS --}}
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-notlight sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="/admin">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kelolapost') ? 'active' : '' }}" href="/kelolapost">
                            <span data-feather="file-plus"></span>
                            Kelola Postingan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kelolakuis') ? 'active' : '' }}" href="/kelolakuis">
                            <span data-feather="book-open"></span>
                            Kelola Kuis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('livechatadmin') ? 'active' : '' }}" href="/livechatadmin ">
                            <span data-feather="message-square"></span>
                            LiveChat
                        </a>
                    </li>
                </ul>
        </nav>
    </div>
</div>
