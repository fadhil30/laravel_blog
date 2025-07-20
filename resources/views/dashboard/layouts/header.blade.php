<header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 me-md-auto px-3 fs-6 text-white" href="/">
        Blog Uhuy
    </a>

    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
                aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                <i class="bi bi-search"></i>
            </button>
        </li>
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
        </li>
    </ul>

    <div class="d-none d-md-flex align-items-center me-2">
        <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" />
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="nav-link px-3 text-white">Logout</button>
        </form>
    </div>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search" />
    </div>
</header>
