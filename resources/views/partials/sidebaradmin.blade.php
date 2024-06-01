<header class="navbar navbar-dark sticky-top bg-blue flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PelitaTaras Admin</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="/home">Back To Home</a>
        </div>
    </div>
</header>
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
                </ul>
        </nav>
    </div>
</div>
