
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif" href="{{ url('admin/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'customers') @else collapsed @endif" href="{{ url('admin/customers') }}">
          <i class="bi bi-person"></i>
          <span>Customer</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'medicine') @else collapsed @endif" href="{{ url('admin/medicine') }}">
          <i class="bi bi-capsule"></i>
          <span>Medicines</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'medicines_stock') @else collapsed @endif" href="{{ url('admin/medicines_stock') }}">
          <i class="bi bi-archive"></i>
          <span>Medicines Stock</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'supplires') @else collapsed @endif" href="{{ url('admin/supplires') }}">
          <i class="bi bi-person-vcard"></i>
          <span>Supplires</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'invoices') @else collapsed @endif" href="{{ url('admin/invoices') }}">
          <i class="bi bi-receipt-cutoff"></i>
          <span>Invoices</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'purchases') @else collapsed @endif" href="{{ url('admin/purchases') }}">
          <i class="bi bi-currency-dollar"></i>
          <span>Purchases</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'logo') @else collapsed @endif" href="{{ url('admin/logo') }}">
          <i class="bi bi-images"></i>
          <span>Logo/Favicon</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'seo') @else collapsed @endif" href="{{ url('admin/seo') }}">
          <i class="bi bi-activity"></i>
          <span>Application Seo</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'account') @else collapsed @endif" href="{{ url('admin/account/') }}">
          <i class="bi bi-gear"></i>
          <span>Account Setting</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif" href="{{ url('logout') }}">
          <i class="bi bi-box-arrow-right"></i> 
          <span>Logout</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->