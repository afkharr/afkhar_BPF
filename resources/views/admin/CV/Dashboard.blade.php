<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Volt - Halaman Dashboard Web CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Halaman Dashboard Web CV">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link class="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="#">
            <span class="text-white fw-bold">Aplikasi Web CV</span>
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item mb-4">
                    <a href="#" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon me-2">
                            <svg class="icon icon-xs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path></svg>
                        </span>
                        <span class="mt-1 sidebar-text fw-bold fs-5 text-secondary">Aplikasi Web CV</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('profil.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Kelola CV Utama</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- KONTEN UTAMA DASHBOARD -->
    <main class="content">
        <div class="py-4">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Halaman Utama Pengaturan CV</h1>
                    <p class="mb-0">Selamat datang di panel manajemen Curriculum Vitae Anda.</p>
                </div>
                <div>
                    <!-- Tombol Tambah Data -->
                    <a href="{{ route('profil.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center animate-up-2">
                        Tambah Profil Baru
                    </a>
                </div>
            </div>
        </div>

        <!-- Alert Notifikasi Sukses -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- TABEL DATA PROFIL CV -->
        <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
            <table class="table table-hover align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th class="border-gray-200">Foto</th>
                        <th class="border-gray-200">Nama Lengkap</th>
                        <th class="border-gray-200">NIM</th>
                        <th class="border-gray-200">Email</th>
                        <th class="border-gray-200">Tentang Saya</th>
                        <th class="border-gray-200 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($profils as $item)
                    <tr>
                        <td>
                            <!-- Perbaikan Path Foto: disesuaikan menuju subfolder manual public/storage/foto_profil/ -->
                            <img src="{{ asset('storage/foto_profil/' . $item->foto) }}" class="rounded-circle border" alt="Foto Profil" style="object-fit: cover; width: 45px; height: 45px;">
                        </td>
                        <td><span class="fw-bold">{{ $item->nama }}</span></td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <span class="d-inline-block text-truncate" style="max-width: 180px;">
                                {{ $item->tentang_saya }}
                            </span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <!-- Tombol Lihat CV -->
                                <a href="{{ route('profil.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info text-white me-2 rounded animate-up-2">
                                    Lihat CV
                                </a>

                                <!-- Tombol Edit -->
                                <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-sm btn-gray-800 me-2 rounded animate-up-2">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('profil.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded animate-up-2" onclick="return confirm('Yakin ingin menghapus data profil ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">Belum ada data profil di database.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <!-- Core Bawaan Script Volt -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>

</html>
