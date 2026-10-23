
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ADI SPORT SHOES STATION')</title>

    <!-- Bootstrap lokal -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        :root {
            --sport-red: #d71920;
            --sport-black: #111111;
            --sport-grey: #757575;
            --sport-light: #f5f5f5;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            color: var(--sport-black);
            background: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* NAVBAR */
        .site-navbar {
            background: #ffffff;
            border-bottom: 1px solid #eeeeee;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.025);
        }

        .site-brand {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .site-logo {
            display: block;
            width: 230px;
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        .site-nav-link {
            color: var(--sport-black);
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .site-nav-link:hover,
        .site-nav-link.active {
            color: var(--sport-red);
        }

        .site-nav-link.active {
            border-bottom: 2px solid var(--sport-red);
            padding-bottom: 6px;
        }

        .navbar-toggler {
            border: 1px solid #dddddd;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* TOMBOL */
        .btn-sport {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            background: var(--sport-red);
            border: 1px solid var(--sport-red);
            color: #ffffff;
            border-radius: 30px;
            padding: 11px 23px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-sport:hover {
            background: #b9151b;
            border-color: #b9151b;
            color: #ffffff;
            transform: translateY(-1px);
        }

        .btn-outline-sport {
            border: 1px solid var(--sport-black);
            color: var(--sport-black);
            background: #ffffff;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-outline-sport:hover {
            background: var(--sport-black);
            color: #ffffff;
        }

        /* FOOTER */
        .site-footer {
            margin-top: 55px;
            border-top: 1px solid #eeeeee;
            background: #ffffff;
        }

        .footer-logo {
            display: block;
            width: 200px;
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .footer-brand {
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.4px;
        }

        .footer-description {
            color: var(--sport-grey);
            font-size: 13px;
            line-height: 1.7;
        }

        .footer-link {
            color: var(--sport-grey);
            text-decoration: none;
            font-size: 13px;
        }

        .footer-link:hover {
            color: var(--sport-red);
        }

        /* RESPONSIVE */
        @media (max-width: 576px) {
            .site-logo {
                width: 185px;
            }

            .navbar .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .site-footer {
                margin-top: 35px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- NAVBAR UTAMA -->
    <nav class="navbar navbar-expand-lg site-navbar sticky-top">
        <div class="container py-2">

            <!-- LOGO TOKO -->
            <a class="site-brand" href="{{ url('/shoes') }}">
                <img
                    src="{{ asset('assets/images/logo-adi-sport.png') }}"
                    alt="ADI SPORT SHOES STATION"
                    class="site-logo"
                >
            </a>

            <!-- TOMBOL MENU MOBILE -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU NAVIGASI -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <div class="navbar-nav ms-auto align-items-lg-center gap-lg-4 mt-3 mt-lg-0">

                    <a class="site-nav-link active" href="{{ url('/shoes') }}">
                        Beranda
                    </a>

                    <a class="site-nav-link" href="{{ url('/shoes') }}#katalog">
                        Katalog
                    </a>

                    <a class="site-nav-link" href="{{ url('/shoes') }}#tentang-kami">
                        Tentang Kami
                    </a>

                    <a class="site-nav-link" href="{{ url('/shoes') }}#kontak">
                        Kontak
                    </a>

                    <a class="btn-sport ms-lg-2" href="{{ url('/shoes') }}#katalog">
                        Jelajahi Koleksi
                        <span aria-hidden="true">&rarr;</span>
                    </a>

                </div>
            </div>

        </div>
    </nav>

    <!-- KONTEN HALAMAN -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container py-4">

            <div class="row align-items-center gy-4">

                <div class="col-md-6">
                    <a href="{{ url('/shoes') }}" class="site-brand">
                        <img
                            src="{{ asset('assets/images/logo-adi-sport.png') }}"
                            alt="ADI SPORT SHOES STATION"
                            class="footer-logo"
                        >
                    </a>

                    <p class="footer-description mb-0">
                        Temukan sepatu olahraga pilihan untuk menemani
                        setiap langkah dan aktivitasmu.
                    </p>
                </div>

                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Jelajahi</h6>

                    <div class="d-flex flex-column gap-2">
                        <a class="footer-link" href="{{ url('/shoes') }}">
                            Beranda
                        </a>

                        <a class="footer-link" href="{{ url('/shoes') }}#katalog">
                            Katalog Sepatu
                        </a>

                        <a class="footer-link" href="{{ url('/shoes') }}#tentang-kami">
                            Tentang Kami
                        </a>

                        <a class="footer-link" href="{{ url('/shoes') }}#kontak">
                            Kontak
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">ADI SPORT</h6>

                    <p class="footer-description mb-0">
                        Sporty style.<br>
                        Comfort every step.
                    </p>
                </div>

            </div>

            <hr class="my-4" style="border-color:#eeeeee;">

            <div class="d-flex flex-column flex-md-row justify-content-between gap-2">
                <span class="footer-description mb-0">
                    &copy; {{ date('Y') }} ADI SPORT SHOES STATION
                </span>

                <span class="footer-description mb-0">
                    Built with Laravel & Bootstrap
                </span>
            </div>

        </div>
    </footer>

    <!-- Bootstrap lokal -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
