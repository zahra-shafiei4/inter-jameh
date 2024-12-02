// change theme dark and light
const themeSwitcher = document.querySelectorAll(".mobile__theme-switcher");
themeSwitcher.forEach((button) => {
    button.onclick = () => {
        if (localStorage.theme === "dark") {
            localStorage.theme = "light";
            document.documentElement.classList.remove("dark");
        } else {
            localStorage.theme = "dark";
            document.documentElement.classList.add("dark");
        }
    };
});

// open and close sidebar functionality
const sidebar_btn = document.querySelector("#sidebar-btn");
const mobile_sidebar = document.querySelector(".mobile__sidebar");
const mobile_sidebar_nav = document.querySelector("#mobile__sidebar-nav");
const mobile_sidebar_bg = document.querySelector("#mobile__sidebar-Bg");
const mobile_sidebar_close_btn = document.querySelector(
    "#mobile__sidebar__close-btn"
);

sidebar_btn.onclick = function () {
    mobile_sidebar.classList.remove("hidden");
    mobile_sidebar_nav.classList.remove("-right-full");
};

mobile_sidebar_close_btn.onclick = function () {
    if (mobile_sidebar.classList.contains("hidden")) {
        mobile_sidebar.classList.remove("hidden");
    } else {
        mobile_sidebar.classList.add("hidden");
        mobile_sidebar_nav.classList.add("-right-full");
    }
};

mobile_sidebar_bg.onclick = function () {
    if (mobile_sidebar.classList.contains("hidden")) {
        mobile_sidebar.classList.remove("hidden");
    } else {
        mobile_sidebar.classList.add("hidden");
    }
};

// To load the state from local storage
if (localStorage.theme === "dark") {
    document.getElementsByTagName("html")[0].setAttribute("class", "dark");
} else {
    document.getElementsByTagName("html")[0].setAttribute("class", "");
}

const head_slider = new Swiper(".head-slider", {
    // Optional parameters
    slidesPerView: 1,
    direction: "horizontal",
    effect: "fade",

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    // scrollbar: {
    //     el: ".swiper-scrollbar",
    //     hide: true,
    // },
});

const announcement_slider = new Swiper(".announcement-slider", {
    // Optional parameters
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        },
    },
    spaceBetween: 16,
    direction: "horizontal",

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        enabled: "true",
    },
});

const news_slider = new Swiper(".news-slider", {
    // Optional parameters
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        },
    },
    spaceBetween: 16,
    direction: "horizontal",

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        enabled: "true",
    },
});

const education_group_slider = new Swiper(".education-group-slider", {
    // Optional parameters
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
        1280: {
            slidesPerView: 4,
        },
    },
    direction: "horizontal",
    // effect:"cards",
    // cardsEffect: {
    //     rotate: 50,
    //     slideShadows: false,
    // },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const educational_calendar_slider = new Swiper(".educational-calendar-slider", {
    // Optional parameters
    spaceBetween: 0,
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 4,
        },
        1024: {
            slidesPerView: 5,
        },
    },
    direction: "horizontal",
    loop: false,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
        dragSize: "100%",
        hide: false,
    },
});

/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollPos = window.scrollY;
const second_navbar = document.querySelector(".second-navbar");
window.onscroll = function () {
    var currentScrollPos = window.scrollY;
    if (prevScrollPos > currentScrollPos) {
        second_navbar.style.top = "0";
    } else {
        second_navbar.style.top = "-68px";
    }
    prevScrollPos = currentScrollPos;
};
