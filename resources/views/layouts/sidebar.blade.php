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
        <li class="dropdown {{ Route::is('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
        </li>
        @if (Auth::user()->role == 'admin')
            <li class="menu-header">Akses</li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-dollar-sign"></i> <span>Pembayaran</span></a>
            </li>
            <li class="dropdown {{ Route::is('admin', 'teacher') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin') }}">Admin</a></li>
                    <li class="{{ Route::is('teacher') ? 'active' : '' }}"><a class="nav-link" href="{{ route('teacher') }}">Petugas</a></li>
                    <li><a class="nav-link" href="forms-validation.html">Murid</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Route::is('grade', 'major', 'spp') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Route::is('grade') ? 'active' : '' }}"><a class="nav-link" href="{{ route('grade') }}">Kelas</a></li>
                <li class="{{ Route::is('major') ? 'active' : '' }}"><a class="nav-link" href="forms-editor.html">Jurusan</a></li>
                <li class="{{ Route::is('spp') ? 'active' : '' }}"><a class="nav-link" href="forms-validation.html">SPP</a></li>
            </ul>
            </li>
        @endif
        @if (Auth::user()->role == 'teacher')
            <li class="menu-header">Akses</li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-dollar-sign"></i> <span>Pembayaran</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Murid</span></a>
            </li>
            <li class="dropdown {{ Route::is('grade', 'major', 'spp') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Route::is('grade') ? 'active' : '' }}"><a class="nav-link" href="{{ route('grade') }}">Kelas</a></li>
                <li class="{{ Route::is('major') ? 'active' : '' }}"><a class="nav-link" href="forms-editor.html">Jurusan</a></li>
                <li class="{{ Route::is('spp') ? 'active' : '' }}"><a class="nav-link" href="forms-validation.html">SPP</a></li>
            </ul>
            </li>
        @endif
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Dokumentasi
        </a>
    </div>        </aside>
</div>