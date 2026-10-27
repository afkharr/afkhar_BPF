<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt - Edit Profil CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Edit Profil CV">
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
                    <h1 class="h4">Ubah Profil CV</h1>
                    <p class="mb-0">Perbarui data informasi pribadi Anda di bawah ini.</p>
                </div>
                <div>
                    <a href="{{ route('profil.index') }}" class="btn btn-light d-inline-flex align-items-center animate-up-2">
                        ← Kembali
                    </a>
                </div>
            </div>
        </div>

        <!-- FORM EDIT UTAMA -->
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Edit Informasi Identitas</h2>

            <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" type="text" value="{{ old('nama', $profil->nama) }}" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nim">NIM</label>
                        <input class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" type="text" value="{{ old('nim', $profil->nim) }}" required>
                        @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="email">Alamat Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email', $profil->email) }}" required>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="tentang_saya">Tentang Saya / Ringkasan Deskripsi</label>
                        <textarea class="form-control @error('tentang_saya') is-invalid @enderror" id="tentang_saya" name="tentang_saya" rows="4" required>{{ old('tentang_saya', $profil->tentang_saya) }}</textarea>
                        @error('tentang_saya') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <!-- Pratinjau Foto Lama (Perbaikan Path: mengarah ke folder manual foto_profil) -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="form-label d-block">Foto Profil Saat Ini</label>
                        <img src="{{ asset('storage/foto_profil/' . $profil->foto) }}" class="img-thumbnail rounded mb-2" alt="Foto Lama" style="max-width: 150px; height: auto; object-fit: cover;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="foto" class="form-label">Ganti Foto Profil (Kosongkan jika tidak ingin diubah)</label>
                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                        <small class="text-muted">Format berkas: JPG, JPEG, PNG. Ukuran maksimal 2MB.</small>
                        @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Perbarui Data</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Core Bawaan Script Volt -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>

</html>
