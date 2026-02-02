{{--
|--------------------------------------------------------------------------
| Home Layout
|--------------------------------------------------------------------------
|
| Specialized layout for the home page with GSAP animations.
| Includes all necessary CDN scripts and custom styles.
|
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title', 'Trane Residential | Premium Heat Pumps & Wall-Mounted HVAC')</title>
        <meta name="description" content="@yield('description', 'Experience the future of home comfort with Trane energy-efficient HVAC systems.')">
        
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        {{-- Tailwind CDN with Custom Config --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: { sans: ['Inter', 'sans-serif'] },
                        colors: {
                            'trane-red': '#E31837',
                            'nordic-beige': '#f9f7f2',
                            brand: {
                                50: '#f4f9f4', 100: '#e3f2e3', 200: '#c5e5c5', 300: '#98c998',
                                400: '#7ebb63', 500: '#5da042', 600: '#467f30', 700: '#386328',
                                800: '#2f4f41', 900: '#263f35', 950: '#1a2e26',
                            }
                        }
                    }
                }
            }
        </script>

        {{-- GSAP Animation Libraries --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

        {{-- Custom Styles --}}
        <style>
            body { overflow-x: hidden; background-color: #fff; }
            
            /* Typography Utils for Animation */
            .line-mask { overflow: hidden; display: block; }
            .line-mask-inner { display: block; transform: translateY(100%); }
            
            /* Image Reveal Utils */
            .reveal-wrapper { position: relative; overflow: hidden; }
            .reveal-wrapper img { transform: scale(1.2); will-change: transform; }
            .reveal-overlay {
                position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background-color: #f2f8f9; z-index: 2; transform: scaleY(1); transform-origin: bottom;
            }

            /* Preloader */
            .loader {
                position: fixed; top: 0; left: 0; width: 100%; height: 100%;
                background: #f2f8f9; z-index: 9999; display: flex;
                justify-content: center; align-items: center;
            }
            
            /* Hero Gradient */
            .hero-gradient {
                background: radial-gradient(circle at 50% 50%, rgba(58, 139, 146, 0.08) 0%, rgba(255, 255, 255, 1) 70%);
            }
        </style>

        @stack('styles')
    </head>
    <body class="font-sans antialiased text-gray-900 selection:bg-brand-500 selection:text-white">

        {{-- Navigation --}}
        @include('partials.header')

        {{-- Main Content --}}
        @yield('content')

        {{-- GSAP Animations (External) --}}
        <script src="{{ asset('js/gsap-animations.js') }}"></script>

        @stack('scripts')
    </body>
</html>
