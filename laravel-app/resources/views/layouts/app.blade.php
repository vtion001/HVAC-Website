<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'NordicAir | Expert HVAC Solutions for Your Home')</title>
    <meta name="title" content="@yield('title', 'NordicAir | Expert HVAC Solutions for Your Home')">
    <meta name="description" content="@yield('description', 'Find your perfect climate solution with NordicAir. Expert HVAC installation, repair, and maintenance services. Scandinavian-engineered heat pumps and air conditioners.')">
    <meta name="keywords" content="HVAC, heating, cooling, heat pump, air conditioner, furnace, installation, repair, maintenance, Nordic, sustainable">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}/">
    <meta property="og:title" content="@yield('title', 'NordicAir | Expert HVAC Solutions for Your Home')">
    <meta property="og:description" content="@yield('description', 'Find your perfect climate solution with NordicAir. Expert HVAC installation, repair, and maintenance services.')">
    <meta property="og:image" content="@yield('og_image', '/images/og-default.jpg')">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}/">
    <meta property="twitter:title" content="@yield('title', 'NordicAir | Expert HVAC Solutions for Your Home')">
    <meta property="twitter:description" content="@yield('description', 'Find your perfect climate solution with NordicAir. Expert HVAC installation, repair, and maintenance services.')">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HVACBusiness",
        "name": "NordicAir",
        "description": "Expert HVAC solutions for first-time homeowners",
        "telephone": "+1-800-667-3422",
        "email": "hello@nordicair.com",
        "url": "https://hvac-website.onrender.com",
        "areaServed": "United States",
        "priceRange": "$$",
        "serviceType": ["HVAC Installation", "HVAC Repair", "Heat Pump Installation", "Air Conditioning Repair"],
        "openingHours": "Mo-Fr 09:00-17:00"
    }
    </script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    <div class="min-h-screen flex flex-col">
        @include('partials.header')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
    
    @stack('scripts')
</body>
</html>
