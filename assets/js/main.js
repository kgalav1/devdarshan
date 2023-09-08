/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/

const navLink = document.querySelectorAll('.nav__link')

const linkAction = () => {
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== ADD BLUR TO HEADER ===============*/
const blurHeader = () => {
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the blur-header class to the header tag
    this.scrollY >= 50 ? header.classList.add('blur-header')
        : header.classList.remove('blur-header')
}
window.addEventListener('scroll', blurHeader)


/*=============== SHOW SCROLL UP ===============*/

const scrollUp = () => {
    const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
        : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

// const sections = document.querySelectorAll('section[id]')

// const scrollActive = () => {
//     const scrollDown = window.scrollY

//     sections.forEach(current => {
//         const sectionHeight = current.offsetHeight,
//             sectionTop = current.offsetTop - 58,
//             sectionId = current.getAttribute('id'),
//             sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')

//         if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight) {
//             sectionsClass.classList.add('active-link')
//         } else {
//             sectionsClass.classList.remove('active-link')
//         }
//     })
// }
// window.addEventListener('scroll', scrollActive)


/*=============== SCROLL REVEAL ANIMATION ===============*/

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 200,
    // reset ture // Animation repeat
});

sr.reveal(`.home__data, .explore__data, .explore__user, .footer__container`);
// sr.reveal(`.home__card`, { delay: 600, distance: '100px', interval: 100 });
sr.reveal(`.about__data, .join__image`, { origin: 'right' });
sr.reveal(`.about__image, .join__data`, { origin: 'left' });
sr.reveal(`.popular__card`, { interval: 200 });



/*=============== SWIPER HORIZONTAL SCROLL ANIMATION ===============*/

var swiper = new Swiper(".swiper", {
    autoplay: {
        delay: 2000,
    },
    effect: "coverflow",
    grabCursor: true,
    spaceBetween: 30,
    centeredSlides: false,
    centerInsufficientSlides: false,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: false
    },
    // loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    keyboard: {
        enabled: true
    },
    mousewheel: {
        thresholdDelta: 70
    },
    breakpoints: {
        460: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 1
        },
        1024: {
            slidesPerView: 3
        },
        1600: {
            slidesPerView: 4
        }
    }
});


const tl = gsap.timeline();

tl.from(".count1", {
    textContent: 0,
    duration: 4,
    ease: "power1.in",
    snap: { textContent: 1 },
    stagger: {
        onUpdate: function () {
            this.targets()[0].innerHTML = numberWithCommas(Math.ceil(this.targets()[0].textContent));
        },
    }
});

tl.from(".count2", {
    textContent: 0,
    duration: 1,
    ease: "power1.in",
    snap: { textContent: 1 },
    stagger: {
        onUpdate: function () {
            this.targets()[0].innerHTML = numberWithCommas(Math.ceil(this.targets()[0].textContent));
        },
    }
});

tl.from(".count3", {
    textContent: 0,
    duration: 1,
    ease: "power1.in",
    snap: { textContent: 1 },
    stagger: {
        onUpdate: function () {
            this.targets()[0].innerHTML = numberWithCommas(Math.ceil(this.targets()[0].textContent));
        },
    }
});

tl.from(".count4", {
    textContent: 0,
    duration: 3,
    ease: "power1.in",
    snap: { textContent: 1 },
    stagger: {
        onUpdate: function () {
            this.targets()[0].innerHTML = numberWithCommas(Math.ceil(this.targets()[0].textContent));
        },
    }
});


function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// ===================================== Common Function ============================================

function baseURL() {
    var setUrl = $('input#setUrl').val();
    if (setUrl == undefined || setUrl == '') {
        url = window.location.href;
    } else {
        url = setUrl;
    }

    if (!url || (url && url.length === 0)) {
        return "";
    }
    return url ? url : "";
}

function notify(msg, cls) {
    const cleanedString = msg.replace(/<p>/g, '').replace(/<\/p>/g, '');
    $.notify(cleanedString, cls);
}


function resetValues() {
    $("#" + arguments[0] + "").find('input[type=text], input[type=email], select, input[type=hidden]').each(function () {
        $(this).val('');
    })
}

function refreshCaptcha() {
    let page = baseURL();
    $.ajax({
        url: page + '/refreshCaptcha',
        type: 'POST',
        success: function (data) {
            $('.captcha').empty().html(data);
        }
    });
}


function addData(form_name) {
    let url = 'contact/' + form_name;
    let form = $("#" + form_name + "");
    let data = new FormData(form[0]);
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        dataType: 'JSON',
        success: function (data) {
            if (data.statusCode == '200') {
                notify(data.message, "success");
                resetValues(form_name);
            } else {
                notify(data.error, "error");
            }
        }
    });
}