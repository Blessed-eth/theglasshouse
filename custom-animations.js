document.addEventListener("DOMContentLoaded", function() {
  gsap.timeline()
    .to(".hero-title", { opacity: 1, duration: 0 }) // Ensure text is visible before animations
    .from(".part-1", { opacity: 0, y: 20, duration: 1.5, ease: "power3.out" })
    .from(".part-2", { opacity: 0, y: 20, duration: 1.5, ease: "power3.out" }, "-=1");
});