<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard {{Auth::user()->name}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">{{Auth::user()->name}}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">MENU</li>
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="bi bi-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/user') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}"><i class="bi bi-person-circle"></i><span>Pengguna</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/news') ? 'active' : '' }}">
                <a href="{{ route('news.index') }}"><i class="bi bi-newspaper"></i><span>Berita</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/suggest') ? 'active' : '' }}">
                <a href="{{ route('suggest.index') }}"><i class="bi bi-envelope"></i><span>Kotak Saran</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/galery') ? 'active' : '' }}">
                <a href="{{ route('galery.index') }}"><i class="bi bi-images"></i><span>Galeri</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/penduduk') ? 'active' : '' }}">
                <a href="{{ route('penduduk.index') }}"><i class="bi bi-people-fill"></i><span>Penduduk</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/kartu-keluarga') ? 'active' : '' }}">
                <a href="{{ route('kartu-keluarga.index') }}"><i class="bi bi-person-vcard"></i><span>Kartu Keluarga</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/datakematian') ? 'active' : '' }}">
                <a href="{{ route('datakematian.index') }}"><i class="bi bi-person-fill-down"></i><span>Data Kematian</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/kontak') ? 'active' : '' }}">
                <a href="{{ route('kontak.index') }}"><i class="bi bi-person-vcard-fill"></i><span>Kontak</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/produk-dusun') ? 'active' : '' }}">
                <a href="{{ route('produk-dusun.index') }}"><i class="bi bi-shop-window"></i><span>Produk Dusun</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/pendapatan') ? 'active' : '' }}">
                <a href="{{ route('pendapatan.index') }}"><i class="bi bi-wallet"></i><span>Pendapatan</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin/setting') ? 'active' : '' }}">
                <a href="{{ route('setting.index') }}"><i class="bi bi-gear-wide-connected"></i><span>Setting</span></a>
            </li>
        </ul>
    </aside>
</div>
