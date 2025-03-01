<nav id="topbar" class="navbar navbar-expand-xxl navbar-light mb-4 static-top shadow ">
    <div class=" container-xxl justify-content-md-end">
        <button id="sidebarToggle" data-bs-toggle="offcanvas" data-bs-target="#sidebar" class="btn btn-outline-primary btn d-md-none mr-3">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('auth.logout') }}" class="nav-link"><i class="fa-solid fa-arrow-right-from-bracket fa-xl btn btn-outline-primary btn-lg"></i></a>
            </li>
        </ul>
    </div>

</nav>