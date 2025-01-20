<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Logistik Polda Jawa Tengah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/subbidtekkom') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Logistik SUBBIDTEKKOM</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/subbagrenmin') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Logistik SUBBAGRENMIN</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/subbidtekinfo') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Logistik SUBBIDTEKINFO</span>
        </a>
    </li>
</ul>