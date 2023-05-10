<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">SPPAY</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">SPPAY</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
        </li>
        <li class="menu-header">Akses</li>
        <li class="dropdown">
            <a href="#" class="nav-link"><i class="fas fa-dollar-sign"></i> <span>Pembayaran</span></a>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Pengguna</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="forms-advanced-form.html">Admin</a></li>
                <li><a class="nav-link" href="{{ route('teacher') }}">Petugas</a></li>
                <li><a class="nav-link" href="forms-validation.html">Murid</a></li>
            </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="forms-advanced-form.html">Kelas</a></li>
            <li><a class="nav-link" href="forms-editor.html">Jurusan</a></li>
            <li><a class="nav-link" href="forms-validation.html">SPP</a></li>
        </ul>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Dokumentasi
        </a>
    </div>        </aside>
</div>