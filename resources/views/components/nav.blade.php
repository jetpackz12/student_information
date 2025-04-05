<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-light btn_out" type="submit" href="#"><i
                    class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
      </ul>
</nav>
<!-- /.navbar -->