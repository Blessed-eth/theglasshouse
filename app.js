const cardWrap = document.getElementById('cardWrap');

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY || document.documentElement.scrollTop;
    if (scrollY > 100) { // Adjust based on when you want the transition to occur
        cardWrap.classList.remove('top');
        cardWrap.classList.add('bottom');
    } else {
        cardWrap.classList.remove('bottom');
        cardWrap.classList.add('top');
    }
});

var $ringContainer = $('#ring-container');

function moveRingContainer(e) { 
    gsap.to($ringContainer, {
        duration: 1.8,
        css: { left: e.pageX, top: e.pageY },
        ease: "elastic.out"
    });
}

$(window).on('mousemove', moveRingContainer);