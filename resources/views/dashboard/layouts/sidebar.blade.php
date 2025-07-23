<nav class="sidebar border-end col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div
    class="offcanvas-lg offcanvas-end bg-body-tertiary"
    tabindex="-1"
    id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel"
  >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Blog Uhuy</h5>
    </div>
    <div
      class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"
    >
      <ul class="nav flex-column">
        <li class="nav-item">
          <a
            {{-- Use Route::is() for a precise match on the named route --}}
            class="nav-link d-flex align-items-center gap-2 {{ Route::is('dashboard') ? 'active' : '' }}"
            aria-current="page"
            href="/dashboard"
          >
            <i class="bi bi-house-fill"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a
            {{-- Use a wildcard '*' to match all URLs starting with 'dashboard/posts' --}}
            class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
            href="/dashboard/posts"
          >
            <i class="bi bi-file-earmark-richtext-fill"></i>
            My Posts
          </a>
        </li>
      </ul>

      @can('admin')
        <h6
          class="heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"
        >
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a
              class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
              href="/dashboard/categories"
            >
              <i class="bi bi-grid"></i>
              Post Categories
            </a>
          </li>
        </ul>
      @endcan
    </div>
  </div>
</nav>
