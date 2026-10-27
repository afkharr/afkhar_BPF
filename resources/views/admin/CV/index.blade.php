
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Resume - {{ $profil->nama }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal CV and Portfolio">

    <link rel="icon" href="{{ asset('CV/img/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --black: #111315;
            --dark: #191c1f;
            --gold: #c6a56b;
            --cream: #f6f3ed;
            --text: #343434;
            --muted: #a6a6a6;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 25px;
        }

        body {
            margin: 0;
            background: #e8e5de;
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            line-height: 1.8;
        }

        a {
            text-decoration: none !important;
            transition: .3s ease;
        }

        .wrapper {
            display: flex;
            max-width: 1500px;
            min-height: 100vh;
            margin: 0 auto;
            background: var(--cream);
            box-shadow: 0 0 60px rgba(0,0,0,.08);
        }

        /* SIDEBAR */
        .sidebar {
            width: 290px;
            min-width: 290px;
            background: var(--black);
            color: white;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 30px 28px 24px;
            text-align: center;
            border-bottom: 1px solid rgba(198,165,107,.25);
        }

        .profile-frame {
            position: relative;
            padding: 7px;
            border: 1px solid var(--gold);
            margin-bottom: 22px;
        }

        .profile-frame img {
            display: block;
            width: 100%;
            height: 280px;
            object-fit: cover;
            object-position: center top;
            background: #252729;
        }

        .sidebar-name {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            line-height: 1.4;
            color: #fff;
            overflow-wrap: anywhere;
        }

        .sidebar-label {
            margin-top: 8px;
            color: var(--gold);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .sidebar-content {
            padding: 25px 20px;
        }

        .nav-heading {
            color: #777b7e;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            margin: 0 13px 14px;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 14px;
            margin-bottom: 5px;
            color: #c1c1c1;
            border-left: 2px solid transparent;
            font-size: 13px;
        }

        .sidebar .nav-link i {
            color: var(--gold);
            width: 22px;
            text-align: center;
        }

        .sidebar .nav-link:hover {
            color: var(--gold);
            background: rgba(198,165,107,.08);
            border-left-color: var(--gold);
            padding-left: 19px;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 22px;
            border-top: 1px solid rgba(255,255,255,.08);
            text-align: center;
        }

        .sidebar-footer a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            margin: 0 4px;
            color: var(--gold);
            border: 1px solid #373737;
            border-radius: 50%;
        }

        .sidebar-footer a:hover {
            background: var(--gold);
            color: var(--black);
        }

        /* MAIN */
        .content {
            flex: 1;
            min-width: 0;
            background: var(--cream);
        }

        /* HERO */
        .header {
            min-height: 520px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 90% 15%, rgba(198,165,107,.17), transparent 35%),
                linear-gradient(135deg, #24272a, #111315 75%);
        }

        .header::before {
            content: "";
            position: absolute;
            right: -150px;
            bottom: -260px;
            width: 520px;
            height: 520px;
            border: 1px solid rgba(198,165,107,.28);
            border-radius: 50%;
            box-shadow: 0 0 0 35px rgba(198,165,107,.035),
                        0 0 0 75px rgba(198,165,107,.025);
        }

        .header::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 4px;
            height: 100%;
            background: var(--gold);
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 75px 65px;
        }

        .hero-eyebrow {
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 5px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .header h1 {
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: clamp(40px, 5vw, 68px);
            line-height: 1.15;
            font-weight: 600;
            margin: 0 0 22px;
            overflow-wrap: anywhere;
        }

        .hero-line {
            width: 65px;
            height: 3px;
            background: var(--gold);
            margin-bottom: 22px;
        }

        .hero-description {
            color: #c3c3c3;
            font-size: 14px;
            letter-spacing: 1px;
        }

        .hero-description span {
            color: var(--gold);
            margin: 0 9px;
        }

        .hero-bottom {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 35px;
        }

        .button-gold,
        .button-outline {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            min-height: 46px;
            padding: 12px 22px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .button-gold {
            background: var(--gold);
            border: 1px solid var(--gold);
            color: #151515 !important;
        }

        .button-gold:hover {
            background: transparent;
            color: var(--gold) !important;
        }

        .button-outline {
            border: 1px solid rgba(255,255,255,.35);
            color: #fff !important;
        }

        .button-outline:hover {
            border-color: var(--gold);
            color: var(--gold) !important;
        }

        /* SECTION */
        .section {
            padding: 70px 60px;
        }

        .section-heading {
            margin-bottom: 35px;
        }

        .section-kicker {
            display: block;
            color: #9a7b48;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .section-heading h2 {
            font-family: 'Playfair Display', serif;
            color: var(--black);
            font-size: 36px;
            font-weight: 600;
            margin: 0;
        }

        .heading-line {
            display: block;
            width: 50px;
            height: 3px;
            margin-top: 17px;
            background: var(--gold);
        }

        /* ABOUT */
        .about-section {
            background: var(--cream);
        }

        .about-layout {
            display: grid;
            grid-template-columns: minmax(190px, .8fr) 1.2fr;
            align-items: start;
            gap: 38px;
        }

        .about-photo {
            padding: 8px;
            background: #fff;
            border: 1px solid #d6c5a3;
            box-shadow: 0 15px 35px rgba(0,0,0,.08);
        }

        .about-photo img {
            display: block;
            width: 100%;
            max-height: 350px;
            object-fit: cover;
            object-position: center top;
        }

        .about-text {
            color: #666;
            font-size: 14px;
            white-space: pre-line;
            overflow-wrap: anywhere;
        }

        .about-name {
            font-family: 'Playfair Display', serif;
            color: #222;
            font-size: 25px;
            margin-bottom: 18px;
        }

        .about-details {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 25px;
        }

        .detail-chip {
            padding: 8px 12px;
            background: #ece6db;
            color: #514734;
            font-size: 12px;
            overflow-wrap: anywhere;
        }

        .detail-chip i {
            color: #9a7b48;
            margin-right: 7px;
        }

        /* CONTACT */
        .contact-section {
            background: #eae5db;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            gap: 17px;
            padding: 24px 20px;
            min-width: 0;
            background: rgba(255,255,255,.7);
            border: 1px solid #ded6c8;
            transition: .3s ease;
        }

        .contact-card:hover {
            border-color: var(--gold);
            transform: translateY(-3px);
        }

        .contact-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 46px;
            height: 46px;
            background: var(--black);
            color: var(--gold);
            font-size: 16px;
        }

        .contact-card small {
            display: block;
            color: #927444;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .contact-card p {
            margin: 5px 0 0;
            color: #292929;
            font-size: 13px;
            overflow-wrap: anywhere;
        }

        /* FOOTER */
        .main-footer {
            padding: 25px 30px;
            background: var(--black);
            color: #aaa;
            text-align: center;
            font-size: 11px;
            letter-spacing: 1px;
        }

        .main-footer span {
            color: var(--gold);
        }

        /* EDIT BUTTON */
        .floating-edit-btn {
            position: fixed;
            z-index: 9999;
            right: 25px;
            bottom: 25px;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 13px 20px;
            background: var(--gold);
            color: #171717 !important;
            border: 1px solid #dfc18b;
            box-shadow: 0 8px 28px rgba(0,0,0,.22);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .floating-edit-btn:hover {
            background: var(--black);
            color: var(--gold) !important;
            transform: translateY(-3px);
        }

        @media (max-width: 1000px) {
            .sidebar {
                width: 245px;
                min-width: 245px;
            }

            .section {
                padding: 55px 35px;
            }

            .hero-inner {
                padding: 60px 35px;
            }

            .about-layout {
                gap: 25px;
            }
        }

        @media (max-width: 767px) {
            .wrapper {
                display: block;
            }

            .sidebar {
                width: 100%;
                min-width: 0;
            }

            .sidebar-header {
                display: flex;
                align-items: center;
                gap: 20px;
                padding: 20px;
                text-align: left;
            }

            .profile-frame {
                width: 95px;
                min-width: 95px;
                margin: 0;
            }

            .profile-frame img {
                height: 115px;
            }

            .sidebar-name {
                font-size: 20px;
            }

            .sidebar-content {
                padding: 10px 15px 20px;
            }

            .sidebar .navbar-nav {
                width: 100%;
            }

            .sidebar-footer {
                display: none;
            }

            .header {
                min-height: 430px;
            }

            .hero-inner {
                padding: 55px 25px;
            }

            .header h1 {
                font-size: 42px;
            }

            .section {
                padding: 45px 24px;
            }

            .section-heading h2 {
                font-size: 30px;
            }

            .about-layout {
                grid-template-columns: 1fr;
            }

            .about-photo {
                max-width: 290px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .floating-edit-btn {
                right: 15px;
                bottom: 15px;
                padding: 11px 15px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            * {
                transition: none !important;
            }
        }
    </style>
</head>

<body>

<a href="{{ route('profil.edit', $profil->id) }}" class="floating-edit-btn">
    <i class="fas fa-pen"></i>
    Edit CV
</a>

<div class="wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div style="width:100%;">
                <div class="profile-frame">
                    <img
                        src="{{ $profil->foto ? asset('storage/foto_profil/' . $profil->foto) : asset('CV/img/about.jpg') }}"
                        alt="Foto {{ $profil->nama }}"
                    >
                </div>

                <div class="sidebar-name">{{ $profil->nama }}</div>
                <div class="sidebar-label">Personal Profile</div>
            </div>
        </div>

        <div class="sidebar-content">
            <p class="nav-heading">MENU UTAMA</p>

            <nav>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#header">
                            <span>Home</span><i class="fas fa-home"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            <span>About Me</span><i class="fas fa-user"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <span>Contact</span><i class="fas fa-envelope"></i>
                        </a>
                    </li>

                    <li class="nav-item mt-4">
                        <a class="nav-link" href="{{ route('profil.index') }}">
                            <span>Kembali ke Dashboard</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="sidebar-footer">
            <a href="#contact" aria-label="Email"><i class="fas fa-envelope"></i></a>
            <a href="#about" aria-label="Profil"><i class="fas fa-user"></i></a>
            <a href="#header" aria-label="Kembali ke atas"><i class="fas fa-arrow-up"></i></a>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="content">

        <!-- HERO -->
        <section class="header" id="header">
            <div class="hero-inner">
                <p class="hero-eyebrow">Welcome to my portfolio</p>

                <h1>{{ $profil->nama }}</h1>

                <div class="hero-line"></div>

                <div class="hero-description">
                    NIM {{ $profil->nim }}
                    <span>/</span>
                    Web Developer &amp; Student
                </div>

                <div class="hero-bottom">
                    <a class="button-gold" href="#about">
                        <i class="fas fa-user"></i> Tentang Saya
                    </a>

                    <a class="button-outline" href="mailto:{{ $profil->email }}">
                        <i class="fas fa-paper-plane"></i> Hubungi Saya
                    </a>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section about-section" id="about">
            <div class="section-heading">
                <span class="section-kicker">Get to know me</span>
                <h2>Tentang Saya</h2>
                <span class="heading-line"></span>
            </div>

            <div class="about-layout">
                <div class="about-photo">
                    <img
                        src="{{ $profil->foto ? asset('storage/foto_profil/' . $profil->foto) : asset('CV/img/about.jpg') }}"
                        alt="Foto {{ $profil->nama }}"
                    >
                </div>

                <div>
                    <h3 class="about-name">{{ $profil->nama }}</h3>

                    <div class="about-text">{{ $profil->tentang_saya }}</div>

                    <div class="about-details">
                        <div class="detail-chip">
                            <i class="fas fa-id-card"></i>
                            {{ $profil->nim }}
                        </div>

                        <div class="detail-chip">
                            <i class="fas fa-graduation-cap"></i>
                            Student
                        </div>
                    </div>

                    <div style="margin-top:25px;">
                        <a class="button-gold" href="mailto:{{ $profil->email }}">
                            <i class="fas fa-envelope"></i> Kirim Email
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section contact-section" id="contact">
            <div class="section-heading">
                <span class="section-kicker">Let's connect</span>
                <h2>Informasi Kontak</h2>
                <span class="heading-line"></span>
            </div>

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div>
                        <small>Email Address</small>
                        <p>{{ $profil->email }}</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-id-card"></i>
                    </div>

                    <div>
                        <small>Nomor Identitas</small>
                        <p>{{ $profil->nim }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="main-footer">
            &copy; {{ date('Y') }} <span>{{ $profil->nama }}</span>.
            Personal CV &amp; Portfolio.
        </footer>

    </main>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
