<div class="sidebar close">
    <div class="logo-details">
        <i><img src="images/logo.png" alt="" srcset="" width="50"></i>
        <span class="logo_name">PelitaTaras</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/home">
                <i class='bx bx-home-alt'></i>
                <span class="link_name">Home</span>
            </a>
        </li>
        <li>
            <div class="iocn-link">
                <a href="/post">
                    <i class='bx bx-book-alt'></i>
                    <span class="link_name">Posts</span>
                </a>
            </div>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="link_name">Chat BK</span>
                </a>
            </div>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-message-add'></i>
                <span class="link_name">Konsultasi AI</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-food-menu'></i>
                <span class="link_name">Kuis</span>
            </a>
        </li>
        <li>
            <a href="/about">
                <i class='bx bx-info-circle'></i>
                <span class="link_name">About Us</span>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit') }}">
                <i class='bx bx-user'></i>
                <span class="link_name">Profil</span>
            </a>
        </li>
        @if (Route::has('login'))
            @auth
                @if (auth()->user()->role === 'admin')
                    <li>
                        <a href="{{ route('admin') }}">
                            <i class='bx bx-wrench'></i>
                            <span class="link_name adminlink">ADMIN</span>
                        </a>
                    </li>
                @endif
            @endauth
        @endif
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out'></i>
                <span class="link_name">{{ __('Log Out') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        <li>
            <div class="profile-details">
                <div class="name-job">
                    <div class="profile_name">{{ Auth::user()->name }}</div>
                    <div class="job">{{ Auth::user()->email }}</div>
                </div>
            </div>
        </li>
    </ul>
</div>
