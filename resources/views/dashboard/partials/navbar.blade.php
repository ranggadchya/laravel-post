<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="/" class="logo d-flex align-items-center">
      <img src="/assets/img/logo-laravel.png" alt="">
      <span class="d-none d-lg-block">Laravel</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>

      <li class="nav-item d-block pe-3">
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="nav-link nav-icon" style="font-size: 1rem"><i class="bi bi-door-open"></i> Logout</button>
        </form>
      </li>

    </ul>
  </nav>

</header>