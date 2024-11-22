<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Dashboard</li>
        
        <li
            class="sidebar-item active ">
            <a href="{{ route('admin') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Home</span>
            </a>
            

        </li>

        <li
            class="sidebar-item">
            <a href="{{ route('absensi.index') }}" class='sidebar-link'>
                <i class="bi bi-journal-check"></i>
                <span>Absensi</span>
            </a>
        </li>

        <li
            class="sidebar-item">
            <a href="{{ route('laporan.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Laporan</span>
            </a>
        
        <li
            class="sidebar-item active ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-person-badge-fill"></i>
                <span>User</span>
            </a>
        </li>
        
        <li
            class="sidebar-item">
            <a href="{{ route('karyawan.index') }}" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>Karyawan</span>
            </a>
        </li>
         <li
            class="sidebar-item">
            <a href="{{ route('jabatan.index') }}" class='sidebar-link'>
                <i class="bi bi-bar-chart-fill"></i>
                <span>Jabatan</span>
            </a>
        </li>
        <li
            class="sidebar-item active ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-life-preserver"></i>
                <span>Setting</span>
            </a>
        </li>
        
        <li
            class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Shift</span>
            </a>
        </li>
        <li
            class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-x-octagon-fill"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>