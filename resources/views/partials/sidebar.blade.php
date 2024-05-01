<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="sidebar-link" href="/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>


            <li class="sidebar-item {{ Request::is('pelanggan') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('pelanggan.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Daftar
                        Pelanggan</span>
                </a>
            </li>
            @if (auth()->user()->role == 'superadmin')
                <li class="sidebar-item {{ Request::is('pelanggan/create') ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('pelanggan.create') }}">
                        <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Tambah
                            Pelanggan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('barang/create') ? 'active' : '' }} ">
                    <a class="sidebar-link" href="{{ route('barang.create') }}">
                        <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Tambah
                            Barang</span>
                    </a>
                </li>
            @endif
            <li class="sidebar-item {{ Request::is('transaksi') ? 'active' : '' }}">
                <a class="sidebar-link" href="/transaksi">
                    <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Transaksi</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="/nota">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Nota</span>
                </a>
            </li>

    </div>
</nav>
