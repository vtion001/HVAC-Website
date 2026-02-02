/**
 * GSAP Animations Module
 * 
 * All page animations centralized for maintainability.
 * Requires: GSAP + ScrollTrigger (loaded via CDN in layout)
 */

// Register ScrollTrigger plugin
if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
}

/**
 * Initialize preloader animation
 * @param {Function} onComplete - Callback when preloader finishes
 */
export function initPreloader(onComplete) {
    const tl = gsap.timeline();

    tl.to("#loader-text", { y: 0, duration: 1, ease: "power4.out" })
        .to("#loader-text", { y: -100, duration: 0.8, ease: "power4.in", delay: 0.5 })
        .to("#preloader", { scaleY: 0, transformOrigin: "top", duration: 0.8, ease: "power4.inOut" }, "-=0.4")
        .call(onComplete);
}

/**
 * Initialize hero section animations
 */
export function initHeroAnimations() {
    // Hero Text Reveal (Staggered Lines)
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
}

/**
 * Initialize stats bar stagger animation
 */
export function initStatsAnimations() {
    gsap.utils.toArray(".stat-item").forEach((stat, i) => {
        gsap.to(stat, {
            scrollTrigger: { trigger: stat, start: "top 95%" },
            opacity: 1, y: 0, duration: 0.8, delay: i * 0.1, ease: "power2.out"
        });
    });
}

/**
 * Initialize image reveal animations (curtain effect)
 */
export function initImageRevealAnimations() {
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
            .from(img, { scale: 1.2, duration: 1.2, ease: "power2.out" }, 0);
    });
}

/**
 * Initialize headline stagger on scroll
 */
export function initScrollTextAnimations() {
    gsap.utils.toArray(".scroll-text").forEach(text => {
        gsap.to(text, {
            scrollTrigger: { trigger: text, start: "top 85%" },
            y: 0, duration: 1, ease: "power4.out"
        });
    });
}

/**
 * Initialize mouse parallax for hero image
 */
export function initHeroParallax() {
    const heroSection = document.querySelector('section');
    const heroImg = document.querySelector('#hero-image-container');

    if (heroSection && heroImg) {
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
}

/**
 * Initialize magnetic button effect
 */
export function initMagneticButtons() {
    const magneticBtns = document.querySelectorAll(".magnetic-btn");
    magneticBtns.forEach((btn) => {
        btn.addEventListener("mousemove", function (e) {
            const pos = btn.getBoundingClientRect();
            const x = e.clientX - pos.left - pos.width / 2;
            const y = e.clientY - pos.top - pos.height / 2;

            gsap.to(btn, { x: x * 0.3, y: y * 0.3, duration: 0.3, ease: "power2.out" });
            gsap.to(btn.querySelector("span"), { x: x * 0.2, y: y * 0.2, duration: 0.3, ease: "power2.out" });
        });

        btn.addEventListener("mouseleave", function () {
            gsap.to(btn, { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.3)" });
            gsap.to(btn.querySelector("span"), { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.3)" });
        });
    });
}

/**
 * Initialize all page animations
 * Called after preloader completes
 */
export function initAllAnimations() {
    initHeroAnimations();
    initStatsAnimations();
    initImageRevealAnimations();
    initScrollTextAnimations();
    initHeroParallax();
    initMagneticButtons();
}

/**
 * Boot the animation system
 * Main entry point - call this on window load
 */
export function bootAnimations() {
    if (typeof gsap === 'undefined') {
        console.warn('GSAP not loaded. Animations disabled.');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);
    initPreloader(initAllAnimations);
}

// Auto-init on window load if this script is loaded directly
if (typeof window !== 'undefined') {
    window.addEventListener('load', bootAnimations);
}
