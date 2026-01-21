<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Trane Residential | Premium Heat Pumps & Wall-Mounted HVAC</title>
        <meta name="description" content="Experience the future of home comfort with Trane's energy-efficient Heat Pumps and Ductless Wall-Mounted systems.">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: { sans: ['Inter', 'sans-serif'] },
                        colors: {
                            brand: {
                                50: '#f2f8f9', 100: '#ddeff0', 200: '#bce0e3', 300: '#8cc8cd',
                                400: '#56a7ae', 500: '#3a8b92', 600: '#317179', 700: '#2b5b62',
                                800: '#284c52', 900: '#234045', 950: '#13282c',
                            }
                        }
                    }
                }
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

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

            .loader {
                position: fixed; top: 0; left: 0; width: 100%; height: 100%;
                background: #f2f8f9; z-index: 9999; display: flex;
                justify-content: center; align-items: center;
            }
            
            .hero-gradient {
                background: radial-gradient(circle at 50% 50%, rgba(58, 139, 146, 0.08) 0%, rgba(255, 255, 255, 1) 70%);
            }
        </style>
    </head>
    <body class="font-sans antialiased text-gray-900 selection:bg-brand-500 selection:text-white">

        <!-- Preloader -->
        <div class="loader" id="preloader">
            <div class="text-center overflow-hidden">
                <span class="text-3xl font-bold tracking-tighter text-brand-900 block translate-y-full" id="loader-text">TRANE<span class="text-brand-500">.</span></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100 transition-all duration-300" id="navbar">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                        <span class="text-2xl font-bold tracking-tighter text-brand-900">TRANE<span class="text-brand-500">.</span></span>
                    </div>
                    <div class="hidden md:flex space-x-10 items-center">
                        <a href="#wall-mounted" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Wall Mounted</a>
                        <a href="#heat-pumps" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Heat Pumps</a>
                        <a href="#reviews" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Reviews</a>
                        
                        <!-- Magnetic Button Wrapper -->
                        <div class="magnetic-wrap">
                            <a href="#contact" class="magnetic-btn px-6 py-2.5 text-sm font-medium text-white bg-brand-900 hover:bg-brand-800 rounded-full transition-all shadow-lg hover:shadow-brand-900/20 inline-block">
                                <span class="inline-block relative z-10">Get a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative min-h-screen flex flex-col lg:flex-row items-center justify-between overflow-hidden hero-gradient pt-20">
            <div class="relative z-10 w-full lg:w-1/2 px-6 lg:pl-24 lg:pr-10 py-20 lg:py-0">
                <div class="mb-6">
                    <span class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-brand-600 uppercase bg-brand-50 rounded-full border border-brand-100 opacity-0 animate-fade-in">
                        2026 Innovation Series
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-brand-900 leading-[1.1]">
                        <span class="line-mask"><span class="line-mask-inner hero-line">Climate Control,</span></span>
                        <span class="line-mask"><span class="line-mask-inner hero-line text-transparent bg-clip-text bg-gradient-to-r from-brand-500 to-brand-700">Reimagined.</span></span>
                    </h1>
                </div>
                <div class="mb-10 overflow-hidden">
                    <p class="hero-desc text-xl text-gray-600 max-w-lg leading-relaxed font-light opacity-0 translate-y-4">
                        It's Hard To Stop A Trane®. Experience the future of home comfort with our whisper-quiet Wall-Mounted HVAC systems.
                    </p>
                </div>
                <div class="hero-btns opacity-0 translate-y-4 flex flex-col sm:flex-row gap-4">
                    <a href="#wall-mounted" class="group px-8 py-4 text-base font-semibold text-white bg-brand-600 hover:bg-brand-700 rounded-full transition-all shadow-xl hover:shadow-brand-500/30 flex items-center justify-center overflow-hidden relative">
                        <span class="relative z-10 flex items-center">
                            Explore Systems
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Hero Image with Mouse Parallax -->
            <div class="relative w-full lg:w-1/2 flex items-center justify-center py-10 lg:py-0 pointer-events-none select-none">
                <div id="hero-image-container" class="relative w-full max-w-md lg:max-w-lg xl:max-w-xl px-10">
                    <div class="absolute inset-0 bg-brand-500/20 blur-[100px] rounded-full mix-blend-multiply filter opacity-50 animate-pulse"></div>
                    <img 
                        src="https://res.cloudinary.com/dbviya1rj/image/upload/v1768947777/ix6hf11tp17ullth882r.jpg" 
                        alt="Trane Wall Mounted Unit" 
                        class="relative z-10 w-full h-auto drop-shadow-2xl"
                        style="mix-blend-mode: multiply;" 
                    >
                </div>
            </div>
        </section>

        <!-- Stats Bar (Clean & Minimal) -->
        <div class="bg-white border-y border-gray-100">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x-0 md:divide-x divide-gray-50">
                    <div class="stat-item opacity-0">
                        <p class="text-4xl font-bold text-brand-900">120+</p>
                        <p class="text-xs text-gray-400 uppercase tracking-widest mt-2">Years of Innovation</p>
                    </div>
                    <div class="stat-item opacity-0">
                        <p class="text-4xl font-bold text-brand-900">1,500+</p>
                        <p class="text-xs text-gray-400 uppercase tracking-widest mt-2">Global Patents</p>
                    </div>
                    <div class="stat-item opacity-0">
                        <p class="text-4xl font-bold text-brand-900">20.0</p>
                        <p class="text-xs text-gray-400 uppercase tracking-widest mt-2">Max SEER2 Rating</p>
                    </div>
                    <div class="stat-item opacity-0">
                        <p class="text-4xl font-bold text-brand-900">10 Year</p>
                        <p class="text-xs text-gray-400 uppercase tracking-widest mt-2">Limited Warranty</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: Wall Mounted (Image Reveal Left) -->
        <section id="wall-mounted" class="py-32 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <!-- Image Wrapper with Mask -->
                <div class="reveal-wrapper rounded-[2.5rem]">
                    <div class="reveal-overlay"></div>
                    <img src="https://images.unsplash.com/photo-1615873968403-89e068629265?q=80&w=2000&auto=format&fit=crop" class="w-full aspect-[4/3] object-cover" alt="Wall Unit">
                </div>
                
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                        <span class="line-mask"><span class="line-mask-inner scroll-text">Precision Cooling.</span></span>
                        <span class="line-mask"><span class="line-mask-inner scroll-text text-brand-600">Absolute Silence.</span></span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-10 leading-relaxed font-light">
                        Our wall-mounted units provide surgical temperature control without the ductwork. With whisper-quiet operation as low as 19dB, you'll feel the comfort without hearing the effort.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-50 flex items-center justify-center text-brand-600 mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-lg font-semibold text-gray-900">Adaptive Inverter</h4>
                                <p class="text-gray-500 mt-1">Micro-adjustments 500x per second for consistent temp.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-50 flex items-center justify-center text-brand-600 mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-lg font-semibold text-gray-900">Multi-Zone Ready</h4>
                                <p class="text-gray-500 mt-1">Connect up to 8 indoor units to a single outdoor pump.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Heat Pumps (Image Reveal Right) -->
        <section id="heat-pumps" class="py-32 bg-gray-50/50">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center lg:flex-row-reverse">
                    <!-- Image Wrapper with Mask -->
                    <div class="reveal-wrapper rounded-[2.5rem]">
                        <div class="reveal-overlay"></div>
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069&auto=format&fit=crop" class="w-full aspect-[4/3] object-cover" alt="Heat Pump">
                    </div>

                    <div>
                        <span class="text-brand-600 font-bold tracking-widest uppercase text-xs mb-4 block">The Future of Heating</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                            <span class="line-mask"><span class="line-mask-inner scroll-text">Move Heat.</span></span>
                            <span class="line-mask"><span class="line-mask-inner scroll-text">Don't Create It.</span></span>
                        </h2>
                        <p class="text-lg text-gray-600 mb-10 leading-relaxed font-light">
                            Trane heat pumps provide cooling in summer and high-efficiency heating in winter by transferring energy. This drastically reduces your carbon footprint and monthly utility bills.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 mb-10">
                            <div class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-3xl font-bold text-brand-900">20.0</p>
                                <p class="text-sm text-gray-500 uppercase mt-1">SEER2 Efficiency</p>
                            </div>
                            <div class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-3xl font-bold text-brand-900">$2k+</p>
                                <p class="text-sm text-gray-500 uppercase mt-1">Tax Credit Eligible</p>
                            </div>
                        </div>

                        <a href="#contact" class="inline-flex items-center text-brand-700 font-semibold hover:text-brand-900 transition-colors group">
                            View XV20i Specifications
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section id="reviews" class="py-32 bg-brand-950 text-white relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-brand-900 to-transparent opacity-50"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                <div class="flex flex-col md:flex-row justify-between items-end mb-20">
                    <div class="max-w-xl">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">Trusted by Homeowners</h2>
                        <p class="text-brand-200 text-lg font-light">America's Most Trusted® HVAC Brand 11 years running.</p>
                    </div>
                    <div class="text-yellow-400 text-2xl hidden md:block">
                        ★★★★★
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors duration-300">
                        <p class="text-gray-300 text-lg italic mb-8 font-light leading-relaxed">"The difference in our electric bill was immediate. We saved 30% in the first month compared to our old oil furnace."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-brand-500 flex items-center justify-center font-bold">S</div>
                            <div class="ml-4">
                                <p class="font-bold">Sarah Jenkins</p>
                                <p class="text-xs text-brand-300 uppercase">Installed XV20i</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors duration-300">
                        <p class="text-gray-300 text-lg italic mb-8 font-light leading-relaxed">"Finally, my upstairs office is cool! The wall-mounted unit is so quiet I sometimes forget it's even running."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-brand-600 flex items-center justify-center font-bold">D</div>
                            <div class="ml-4">
                                <p class="font-bold">David K.</p>
                                <p class="text-xs text-brand-300 uppercase">Ductless Mini-Split</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors duration-300">
                        <p class="text-gray-300 text-lg italic mb-8 font-light leading-relaxed">"The installer was professional and the Trane unit looks sleek. Worth the investment for the reliability alone."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-brand-700 flex items-center justify-center font-bold">M</div>
                            <div class="ml-4">
                                <p class="font-bold">Michael R.</p>
                                <p class="text-xs text-brand-300 uppercase">System Upgrade</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-white pt-24 pb-12 px-6 border-t border-gray-100">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-gray-400 gap-8">
                <div class="text-center md:text-left">
                    <span class="text-2xl font-bold tracking-tighter text-brand-900 block mb-2">TRANE<span class="text-brand-500">.</span></span>
                    <p>&copy; 2026 Trane Technologies. All rights reserved.</p>
                </div>
                <div class="flex space-x-8 font-medium">
                    <a href="#" class="hover:text-brand-600 transition-colors">Privacy</a>
                    <a href="#" class="hover:text-brand-600 transition-colors">Terms</a>
                    <a href="#" class="hover:text-brand-600 transition-colors">Support</a>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script>
            gsap.registerPlugin(ScrollTrigger);

            // --- Preloader Animation ---
            window.addEventListener('load', () => {
                const tl = gsap.timeline();
                
                tl.to("#loader-text", { y: 0, duration: 1, ease: "power4.out" })
                  .to("#loader-text", { y: -100, duration: 0.8, ease: "power4.in", delay: 0.5 })
                  .to("#preloader", { scaleY: 0, transformOrigin: "top", duration: 0.8, ease: "power4.inOut" }, "-=0.4")
                  .call(initAnimations);
            });

            // --- Main Animations ---
            function initAnimations() {
                
                // 1. Hero Text Reveal (Staggered Lines)
                gsap.to(".hero-line", {
                    y: 0,
                    duration: 1.2,
                    stagger: 0.1,
                    ease: "power4.out",
                    delay: 0.2
                });

                gsap.to(".hero-desc", {
                    opacity: 1, y: 0, duration: 1, ease: "power3.out", delay: 0.8
                });

                gsap.to(".hero-btns", {
                    opacity: 1, y: 0, duration: 1, ease: "power3.out", delay: 1
                });

                // 2. Stats Bar Stagger
                gsap.utils.toArray(".stat-item").forEach((stat, i) => {
                    gsap.to(stat, {
                        scrollTrigger: { trigger: stat, start: "top 95%" },
                        opacity: 1, y: 0, duration: 0.8, delay: i * 0.1, ease: "power2.out"
                    });
                });

                // 3. Architectural Image Reveals (The "Curtain" Effect)
                gsap.utils.toArray(".reveal-wrapper").forEach(wrapper => {
                    let overlay = wrapper.querySelector(".reveal-overlay");
                    let img = wrapper.querySelector("img");

                    let tl = gsap.timeline({
                        scrollTrigger: {
                            trigger: wrapper,
                            start: "top 80%",
                        }
                    });

                    // Reveal image by scaling overlay down
                    tl.to(overlay, { scaleY: 0, duration: 1.2, ease: "power4.inOut" })
                      .from(img, { scale: 1.2, duration: 1.2, ease: "power2.out" }, 0); // Parallax zoom out effect
                });

                // 4. Headline Stagger on Scroll
                gsap.utils.toArray(".scroll-text").forEach(text => {
                    gsap.to(text, {
                        scrollTrigger: { trigger: text, start: "top 85%" },
                        y: 0, duration: 1, ease: "power4.out"
                    });
                });

                // 5. Mouse Parallax for Hero Image (Subtle 3D feel)
                const heroSection = document.querySelector('section');
                const heroImg = document.querySelector('#hero-image-container');
                
                if(heroSection && heroImg) {
                    heroSection.addEventListener('mousemove', (e) => {
                        const x = (e.clientX / window.innerWidth - 0.5) * 20;
                        const y = (e.clientY / window.innerHeight - 0.5) * 20;
                        
                        gsap.to(heroImg, {
                            rotationY: x,
                            rotationX: -y,
                            x: -x * 1.5,
                            y: -y * 1.5,
                            duration: 1,
                            ease: 'power2.out'
                        });
                    });
                }

                // 6. Magnetic Button Effect
                const magneticBtns = document.querySelectorAll(".magnetic-btn");
                magneticBtns.forEach((btn) => {
                    btn.addEventListener("mousemove", function(e) {
                        const pos = btn.getBoundingClientRect();
                        const x = e.clientX - pos.left - pos.width / 2;
                        const y = e.clientY - pos.top - pos.height / 2;

                        gsap.to(btn, { x: x * 0.3, y: y * 0.3, duration: 0.3, ease: "power2.out" });
                        gsap.to(btn.querySelector("span"), { x: x * 0.2, y: y * 0.2, duration: 0.3, ease: "power2.out" });
                    });

                    btn.addEventListener("mouseleave", function() {
                        gsap.to(btn, { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.3)" });
                        gsap.to(btn.querySelector("span"), { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.3)" });
                    });
                });
            }
        </script>
    </body>
</html>