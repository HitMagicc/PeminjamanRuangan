<div class="rectangle-parent">
    <div class="Judul">
        <div class="teks-judul">Peminjaman Ruangan FMIPA</div>
    </div>
    <div class="group-item {{ request()->is('user/dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard.index') }}">
            <div class="dashboard">
                <img class="vector-icon dashboardsvg" alt="" src="{{ request()->is('user/dashboard') ? asset('assets/img/dashboardact.svg') : asset('assets/img/dashboard.svg') }}">
                <div class="teks-label">Dashboard</div>
                
            </div>
        </a>
    </div>
    <div class="group-item {{ request()->is('user/request*') ? 'active' : '' }}">
        <a href="{{ route('request.index') }}">
            <div class="request">
                <img class="vector-icon dashboardsvg" alt="" src="{{ request()->is('user/request*') ? asset('assets/img/requestact.svg') : asset('assets/img/request.svg') }}">
                <div class="teks-label">Request Ruangan</div>
            </div>
        </a>
    </div>
    
    <div class="group-item {{ request()->is('user/riwayat*') ? 'active' : '' }}">
        <a href="{{ route('riwayat.index') }}">
            <div class="riwayat">
                <img class="vector-icon dashboardsvg" alt="" src="{{ request()->is('user/riwayat*') ? asset('assets/img/riwayatact.svg') : asset('assets/img/riwayat.svg') }}">
                <div class="teks-label">Riwayat Pemesanan</div>
            </div>
        </a>
    </div>
    <div class="flex-grow"></div>
    <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-parent">
                <img class="vector-icon usersvg" alt="" src="{{asset('assets/img/user.svg')}}">
                <div class="user">User</div>
            </div>
        </button>
        <ul class="dropdown-menu">
            <form action="{{route('auth.logout')}}" method="post">
                @csrf
                <li><button type="submit" style="background-color: #fff;color:black">Logout</button></li>
            </form>
        </ul>
    </div>
    <a href="">
        
    </a>
</div>
