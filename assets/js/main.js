// //mobile-burger
// const burgerIcon = document.querySelector('.burger-icon');
// const menu = document.querySelector('.menu-wrap');
// const menuBackdrop =document.querySelector('.menu-backdrop');
// const body =document.querySelector('body');
//
// burgerIcon.addEventListener('click', () => {
//     burgerIcon.classList.toggle('animate');
//     menu.classList.toggle('show-menu');
//     body.classList.toggle('body-overflow');
//     menuBackdrop.classList.toggle('menu-backdrop--show')
// });
// function closeMenuAndReset() {
//     burgerIcon.classList.remove('animate');
//     menu.classList.remove('show-menu');
//     body.classList.remove('body-overflow');
//     menuBackdrop.classList.remove('menu-backdrop--show');
// }
// document.addEventListener('click', (event) => {
//     // Проверяем, был ли клик вне элемента .mobile-menu и бургер-иконки
//     if (!menu.contains(event.target) && !burgerIcon.contains(event.target)) {
//         closeMenuAndReset(); // Закрываем меню и снимаем анимацию
//     }
// });
// const swiper = new Swiper('.swiperMain', {
//     autoplay: {
//         delay: 12000,
//     },
//     spaceBetween: 0,
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// });
// // Найти все элементы с классом "form-grid"
// let formGridElements = document.querySelectorAll('.form-grid');
//
// formGridElements.forEach(function(formGridElement) {
//     let brElements = formGridElement.querySelectorAll('br');
//     brElements.forEach(function(brElement) {
//         brElement.remove();
//     });
// });
const swiperNews = new Swiper('.swiperNews', {
    spaceBetween: 20,
    slidesPerView: 4,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.swiper-button-next .swiper-button-next--news',
        prevEl: '.swiper-button-prev .swiper-button-next--news',
    },
});
const swiperShop = new Swiper('.swiperShop', {
    spaceBetween: 20,
    slidesPerView: 4,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.swiper-button-next--shop',
        prevEl: '.swiper-button-next--shop',
    },
});
const swiperLore = new Swiper('.swiperLore', {
    spaceBetween: 20,
    slidesPerView: 4,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.swiper-button-next .swiper-button-next--lore',
        prevEl: '.swiper-button-prev .swiper-button-next--lore',
    },
});
//theme-toggle
function calculateSettingAsThemeString({ localStorageTheme, systemSettingDark }) {
    if (localStorageTheme !== null) {
        return localStorageTheme;
    }

    if (systemSettingDark.matches) {
        return "dark";
    }
    return "dark";
}


function updateButton({ buttonEl, isDark }) {
    const [lightBtn, darkBtn] = buttonEl.querySelectorAll('.theme-button__btn');

    if (isDark) {
        darkBtn.classList.add('theme-button__btn--selected');
        lightBtn.classList.remove('theme-button__btn--selected');
    } else {
        lightBtn.classList.add('theme-button__btn--selected');
        darkBtn.classList.remove('theme-button__btn--selected');
    }
}

function updateThemeOnHtmlEl({ theme }) {
    document.querySelector("html").setAttribute("data-theme", theme);
}

const button = document.querySelector(".theme-button");
const localStorageTheme = localStorage.getItem("theme");
const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");

let currentThemeSetting = calculateSettingAsThemeString({ localStorageTheme, systemSettingDark });
updateButton({ buttonEl: button, isDark: currentThemeSetting === "dark" });
updateThemeOnHtmlEl({ theme: currentThemeSetting });

button.addEventListener("click", (event) => {
    const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

    localStorage.setItem("theme", newTheme);
    updateButton({ buttonEl: button, isDark: newTheme === "dark" });
    updateThemeOnHtmlEl({ theme: newTheme });

    currentThemeSetting = newTheme;
});

//sticky-menu
const stickyMenu = () => {
    const menu = document.querySelector(".header");
    const sticky = menu.offsetTop;

    if (window.pageYOffset >= sticky) {
        menu.classList.add("sticky");
    } else {
        menu.classList.remove("sticky");
    }

    // Добавляем условие для удаления класса при возвращении на начало страницы
    if (window.pageYOffset === 0) {
        menu.classList.remove("sticky");
    }
};

window.addEventListener('scroll', stickyMenu);