/**
 * GSAP Animations - Inline Compatible Version
 * 
 * This script initializes all GSAP animations for the Trane website.
 * Must be loaded AFTER gsap and ScrollTrigger CDN scripts.
 */

(function () {
    'use strict';

    // Ensure GSAP is available
    if (typeof gsap === 'undefined') {
        console.warn('GSAP not loaded. Animations disabled.');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // --- Preloader Animation ---
    window.addEventListener('load', function () {
        var tl = gsap.timeline();

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
        gsap.utils.toArray(".stat-item").forEach(function (stat, i) {
            gsap.to(stat, {
                scrollTrigger: { trigger: stat, start: "top 95%" },
                opacity: 1, y: 0, duration: 0.8, delay: i * 0.1, ease: "power2.out"
            });
        });

        // 3. Architectural Image Reveals (The "Curtain" Effect)
        gsap.utils.toArray(".reveal-wrapper").forEach(function (wrapper) {
            var overlay = wrapper.querySelector(".reveal-overlay");
            var img = wrapper.querySelector("img");

            var tl = gsap.timeline({
                scrollTrigger: {
                    trigger: wrapper,
                    start: "top 80%",
                }
            });

            // Reveal image by scaling overlay down
            tl.to(overlay, { scaleY: 0, duration: 1.2, ease: "power4.inOut" })
                .from(img, { scale: 1.2, duration: 1.2, ease: "power2.out" }, 0);
        });

        // 4. Headline Stagger on Scroll
        gsap.utils.toArray(".scroll-text").forEach(function (text) {
            gsap.to(text, {
                scrollTrigger: { trigger: text, start: "top 85%" },
                y: 0, duration: 1, ease: "power4.out"
            });
        });

        // 5. Mouse Parallax for Hero Image (Subtle 3D feel)
        var heroSection = document.querySelector('section');
        var heroImg = document.querySelector('#hero-image-container');

        if (heroSection && heroImg) {
            heroSection.addEventListener('mousemove', function (e) {
                var x = (e.clientX / window.innerWidth - 0.5) * 20;
                var y = (e.clientY / window.innerHeight - 0.5) * 20;

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
        var magneticBtns = document.querySelectorAll(".magnetic-btn");
        magneticBtns.forEach(function (btn) {
            btn.addEventListener("mousemove", function (e) {
                var pos = btn.getBoundingClientRect();
                var x = e.clientX - pos.left - pos.width / 2;
                var y = e.clientY - pos.top - pos.height / 2;

                gsap.to(btn, { x: x * 0.3, y: y * 0.3, duration: 0.3, ease: "power2.out" });
                gsap.to(btn.querySelector("span"), { x: x * 0.2, y: y * 0.2, duration: 0.3, ease: "power2.out" });
            });

            btn.addEventListener("mouseleave", function () {
                gsap.to(btn, { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.3)" });
                gsap.to(btn.querySelector("span"), { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.3)" });
            });
        });
    }
})();
