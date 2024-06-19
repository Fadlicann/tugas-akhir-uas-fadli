<?php
// Mendapatkan path dari URL saat ini
$current_url = $_SERVER['REQUEST_URI'];
?>

<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll" style="padding-top: 10%">
        <nav>
            <ul class="nav">
                <li>
                    <a href="/home" class="<?php echo $current_url == '/home' ? 'active' : ''; ?>">
                        <i class="lnr lnr-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/dosen" class="<?php echo $current_url == '/dosen' ? 'active' : ''; ?>">
                        <i class="lnr lnr-user"></i>
                        <span>Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="/siswa" class="<?php echo $current_url == '/siswa' ? 'active' : ''; ?>">
                        <i class="lnr lnr-users"></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="/prodi" class="<?php echo $current_url == '/prodi' ? 'active' : ''; ?>">
                        <i class="lnr lnr-book"></i>
                        <span>Prodi</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
