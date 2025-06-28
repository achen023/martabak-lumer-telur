<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- CSS Assets --}}
    <link rel="stylesheet" href="style/flowbite.min.css">
    <link rel="icon" href="image/logo-web.png" type="image/x-icon">
    <script src="style/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <style>
        /* (semua style kamu tetap di sini tanpa perubahan) */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.9) !important;
            backdrop-filter: blur(10px);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
        }

        /* Carousel Styles */
        .martabak-hero-carousel,
        .carousel-item {
            height: 100vh;
            min-height: 600px;
            position: relative;
            overflow: hidden;
        }

        .carousel-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: transform 0.6s ease-in-out;
        }

        .carousel-item:hover .carousel-bg {
            transform: scale(1.05);
        }

        .slide-bg-1 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)),
                        url('/image/bnr.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide-bg-2 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)),
                        url('/image/benner2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide-bg-3 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)),
                        url('/image/bannerlok.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .carousel-overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7));
            z-index: 1;
        }

        .carousel-content {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            z-index: 2;
            color: white;
            text-align: center;
        }

        .slide-icon {
            font-size: 4rem;
            color: #ffd700;
            animation: pulse 2s infinite;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .slide-title {
            font-size: 4rem;
            font-weight: 900;
            background: linear-gradient(45deg, #ff6b6b, #feca57, #48dbfb);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 3s ease-in-out infinite;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8);
        }

        .slide-subtitle {
            font-size: 1.4rem;
            font-weight: 300;
            line-height: 1.6;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .slide-price .original-price {
            text-decoration: line-through;
            font-size: 1.8rem;
            color: #ff6b6b;
            opacity: 0.8;
        }

        .slide-price .current-price {
            font-size: 3rem;
            font-weight: 800;
            color: #ffd700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .slide-actions .btn {
            padding: 15px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            border: none;
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 107, 107, 0.4);
            background: linear-gradient(45deg, #ee5a24, #ff6b6b);
        }

        .btn-outline-light {
            border: 2px solid white;
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-outline-light:hover {
            background: white;
            color: #333;
            transform: translateY(-3px);
        }

        .carousel-indicators {
            bottom: 30px;
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border: 2px solid white;
            margin: 0 8px;
        }

        .carousel-indicators .active {
            background-color: #ffd700;
            transform: scale(1.3);
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 70px;
            height: 70px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(255, 107, 107, 0.8);
            border-color: #ff6b6b;
        }

        .carousel-control-prev { left: 30px; }
        .carousel-control-next { right: 30px; }

        /* Animation */
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-fadeInDown {
            animation: fadeInDown 1s ease-out;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .martabak-hero-carousel,
            .carousel-item {
                height: 80vh;
                min-height: 500px;
            }

            .slide-title { font-size: 2.5rem; }
            .slide-icon { font-size: 2.5rem; }
            .slide-subtitle { font-size: 1.1rem; }
            .current-price { font-size: 2.2rem; }
            .slide-actions .btn { padding: 12px 25px; font-size: 0.9rem; }
            .carousel-control-prev, .carousel-control-next {
                width: 50px;
                height: 50px;
            }

            .carousel-control-prev { left: 15px; }
            .carousel-control-next { right: 15px; }
        }

        @media (max-width: 576px) {
            .slide-title { font-size: 2rem; }
            .slide-actions .btn {
                display: block;
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">

    {{-- Navbar --}}
    @include('components.megamenu')

    {{-- Main Content --}}
    <main class="w-full px-4">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6 mt-6">@yield('page_title')</h2>
            <div data-aos="fade-up" data-aos-delay="200">
                @yield('content')
            </div>
        </div>

        <div class="bg-gray-50 py-8">
            <div class="container mx-auto px-4 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                @yield('content2')
            </div>
        </div>
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- JS Libraries --}}
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>

    {{-- Carousel & Dropdown --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('#martabakCarousel');
            if (carousel) {
                const carouselInstance = new bootstrap.Carousel(carousel, {
                    interval: 4000,
                    touch: true,
                    pause: 'hover'
                });

                document.querySelectorAll('.slide-actions .btn').forEach(button => {
                    button.addEventListener('mouseenter', () => carouselInstance.pause());
                    button.addEventListener('mouseleave', () => carouselInstance.cycle());
                });
            }
        });

        const btn = document.getElementById('dropdownUserBtn');
        const menu = document.getElementById('dropdownUserMenu');

        document.addEventListener('click', function (e) {
            if (btn?.contains(e.target)) {
                menu?.classList.toggle('hidden');
            } else if (!menu?.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
