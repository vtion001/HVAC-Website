<footer class="bg-gray-900 text-white pt-20 pb-10 border-t border-white/5">
    <div class="container mx-auto px-6">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 mb-16">
            
            <!-- Brand & Newsletter -->
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2 mb-6 group">
                    <div class="w-10 h-10 rounded-xl bg-brand-400 text-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-white tracking-tight">NordicAir</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-sm">
                    Building first-time homeowners towards smarter, more sustainable, and perfectly comfortable living spaces with Scandinavian-engineered HVAC solutions.
                </p>
                
                <!-- Contact Info -->
                <div class="space-y-3 mb-8">
                    <a href="tel:1-800-667-3422" class="flex items-center gap-3 text-gray-300 hover:text-brand-400 transition-colors">
                        <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <span class="text-sm font-medium">1-800-NORDIC-AIR</span>
                    </a>
                    <a href="mailto:hello@nordicair.com" class="flex items-center gap-3 text-gray-300 hover:text-brand-400 transition-colors">
                        <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-sm font-medium">hello@nordicair.com</span>
                    </a>
                    <div class="flex items-center gap-3 text-gray-300">
                        <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="text-sm font-medium">Mon-Fri, 9am - 5pm EST</span>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors text-white/60 hover:text-white" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors text-white/60 hover:text-white" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors text-white/60 hover:text-white" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors text-white/60 hover:text-white" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors text-white/60 hover:text-white" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Heating Links -->
            <div class="lg:col-span-2">
                <h4 class="font-bold text-white uppercase text-xs tracking-wider mb-6">Heating</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('heat-pumps') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Heat Pumps</a></li>
                    <li><a href="{{ route('furnaces') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Furnaces</a></li>
                    <li><a href="{{ route('heating') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Boilers</a></li>
                    <li><a href="{{ route('heating') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Heating Installation</a></li>
                    <li><a href="{{ route('heating') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Heating Repair</a></li>
                </ul>
            </div>

            <!-- Cooling Links -->
            <div class="lg:col-span-2">
                <h4 class="font-bold text-white uppercase text-xs tracking-wider mb-6">Cooling</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('cooling') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Air Conditioners</a></li>
                    <li><a href="{{ route('ductless') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Ductless Systems</a></li>
                    <li><a href="{{ route('cooling') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Central AC</a></li>
                    <li><a href="{{ route('cooling') }}" class="text-gray-400 hover:text-brand-400 transition-colors">AC Installation</a></li>
                    <li><a href="{{ route('cooling') }}" class="text-gray-400 hover:text-brand-400 transition-colors">AC Repair</a></li>
                </ul>
            </div>

            <!-- Products Links -->
            <div class="lg:col-span-2">
                <h4 class="font-bold text-white uppercase text-xs tracking-wider mb-6">Products</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('air-quality') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Air Purifiers</a></li>
                    <li><a href="{{ route('thermostats') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Smart Thermostats</a></li>
                    <li><a href="{{ route('packaged-systems') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Packaged Systems</a></li>
                    <li><a href="{{ route('air-quality') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Humidifiers</a></li>
                    <li><a href="{{ route('air-quality') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Ventilation</a></li>
                </ul>
            </div>

            <!-- Company & Support Links -->
            <div class="lg:col-span-2">
                <h4 class="font-bold text-white uppercase text-xs tracking-wider mb-6">Company</h4>
                <ul class="space-y-3 text-sm mb-8">
                    <li><a href="{{ route('why-nordic') }}" class="text-gray-400 hover:text-brand-400 transition-colors">About Us</a></li>
                    <li><a href="{{ route('why-nordic') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Why Choose Us</a></li>
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Our Guarantee</a></li>
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Financing</a></li>
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Careers</a></li>
                </ul>

                <h4 class="font-bold text-white uppercase text-xs tracking-wider mb-6">Support</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Customer Portal</a></li>
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Service Request</a></li>
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">Manuals & Guides</a></li>
                    <li><a href="{{ route('support') }}" class="text-gray-400 hover:text-brand-400 transition-colors">FAQ</a></li>
                </ul>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="border-t border-white/5 pt-10 pb-8">
            <div class="flex flex-wrap justify-center gap-8 md:gap-16">
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-400 mb-1">15,000+</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Happy Customers</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-400 mb-1">10 Years</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Warranty</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-400 mb-1">A+++</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Energy Rated</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-400 mb-1">24/7</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Emergency Service</div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} Nordic Climate Solutions. All rights reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-white transition-colors">Accessibility</a>
                <a href="#" class="hover:text-white transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
