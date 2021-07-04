<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin/dashboard') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
  
      <!-- Logout -->
      <li class="nav-item">
       <a class="nav-link" href="{{ url('admin/logout') }}" data-toggle="tooltip" data-placement="bottom" title="Logout">
         <i class="fas fa-sign-out-alt"></i>
       </a>
      </li>
    </ul>

</nav>
  <!-- /.navbar -->