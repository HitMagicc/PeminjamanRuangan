<div class="rectangle-parent">
    <div class="judul">
        <div class="teks-judul">Peminjaman Ruangan FMIPA</div>
    </div>
    <div class="group-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard.index') }}">
            <div class="dashboard">
                <img class="vector-icon dashboardsvg" alt="" src="{{ request()->is('admin/dashboard*') ? asset('assets/img/dashboardact.svg') : asset('assets/img/dashboard.svg') }}">
                <div class="teks-label">Dashboard</div>
            </div>
        </a>
    </div>
    <div class="group-item {{ request()->is('admin/gedung*') ? 'active' : '' }}">
        <a href="{{ route('admin.gedung.index') }}">
            <div class="request">
                <img class="dooropenfill-icon" alt="" src="{{ request()->is('admin/gedung*') ? asset('assets/img/requestact.svg') : asset('assets/img/request.svg') }}">
                <div class="riwayat-pemesanan">Gedung</div>
            </div>
        </a>
    </div>
    <div class="group-item {{ request()->is('admin/ruangan*') ? 'active' : '' }}">
        <a href="{{ route('admin.ruangan.index') }}">
            <div class="riwayat">
                <img class="dooropenfill-icon" alt="" src="{{ request()->is('admin/ruangan*') ? asset('assets/img/riwayatact.svg') : asset('assets/img/riwayat.svg') }}">
                <div class="riwayat-pemesanan">Ruangan</div>
            </div>
        </a>
    </div>
    <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-parent">
                <img class="vector-icon usersvg" alt="" src="{{ asset('assets/img/user.svg') }}">
                <div class="user">User</div>
            </div>
        </button>
        <ul class="dropdown-menu">
            <form action="{{ route('auth.logout') }}" method="post">
                @csrf
                <li><button type="submit" style="background-color: #fff; color: black">Logout</button></li>
            </form>
        </ul>
    </div>
</div>
