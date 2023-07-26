<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? ' ' : 'collapsed' }}" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/posts*') ? ' ' : 'collapsed' }}" href="/dashboard/posts">
        <i class="bi bi-mailbox"></i>
        <span>My Posts</span>
      </a>
    </li>

  </ul>

  @can('admin')
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">administrator</li>
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? ' ' : 'collapsed' }}" href="/dashboard/categories">
          <i class="bi bi-folder2-open"></i>
          <span>Categories</span>
        </a>
      </li>
    </ul>
  @endcan

</aside>