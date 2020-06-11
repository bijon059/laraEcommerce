<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face8.jpg') }}" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Allen Moreno</p>
          <p class="designation">Premium user</p>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item {{ Route::is('admin.product.list') ? 'actives' : '' }}">
      <a class="nav-link " href="{{ route('admin.product.list') }}">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Product List</span>
      </a>
    </li>
    <li class="nav-item {{ Route::is('admin.product.create') ? 'actives' : '' }}">
      <a class="nav-link " href="{{ route('admin.product.create') }}">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Add Product</span>
      </a>
    </li>

    <li class="nav-item {{ Route::is('admin.product.search') ? 'actives' : '' }}">
      <a class="nav-link" href="{{ route('admin.product.search') }}">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Search Product</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/chartjs.html">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/basic-table.html">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/font-awesome.html">
        <i class="menu-icon typcn typcn-user-outline"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.category.index') }}"> Manage Categories </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.category.create') }}"> Add Categories </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
