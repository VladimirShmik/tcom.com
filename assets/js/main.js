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
new Swiper('.swiperNews', {
    spaceBetween: 20,
    slidesPerView: 4,
    autoplay: {
        delay: 4000,
    },
    navigation: {
        nextEl: '.swiper-button-next--news',
        prevEl: '.swiper-button-prev--news',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
            slideToClickedSlide: true,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
            slideToClickedSlide: true,
        },
        1023: {
            slidesPerView: 4,
            spaceBetween: 20,
            slideToClickedSlide: true,
        }
    }
});
 new Swiper('.swiperShop', {
    spaceBetween: 20,
    slidesPerView: 'auto',
    autoplay: {
        delay: 2500,
    },
    navigation: {
        nextEl: '.swiper-button-next--shop',
        prevEl: '.swiper-button-prev--shop',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
            slideToClickedSlide: true,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
            slideToClickedSlide: true,
        },
        1023: {
            slidesPerView: 4,
            spaceBetween: 20,
            slideToClickedSlide: true,
        }
    }
});
new Swiper('.swiperLore', {
    spaceBetween: 20,
    slidesPerView: 'auto',
    autoplay: {
        delay: 3500,
    },
    navigation: {
        nextEl: '.swiper-button-next--lore',
        prevEl: '.swiper-button-prev--lore',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
            slideToClickedSlide: true,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
            slideToClickedSlide: true,
        },
        1023: {
            slidesPerView: 4,
            spaceBetween: 20,
            slideToClickedSlide: true,
        }
    }
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


// // Функция-декоратор для ограничения частоты вызова функции
// const debounce = (func, delay) => {
//     let timeoutId;
//     return (...args) => {
//         clearTimeout(timeoutId);
//         timeoutId = setTimeout(() => {
//             func(...args);
//         }, delay);
//     };
// };
//
// // Функция для добавления/удаления класса "sticky" в зависимости от скролла
// const stickyMenu = () => {
//     const menu = document.querySelector(".header");
//     const sticky = menu.offsetTop;
//
//     if (window.pageYOffset >= sticky) {
//         menu.classList.add("sticky");
//     } else {
//         menu.classList.remove("sticky");
//     }
//
//     if (window.pageYOffset === 0) {
//         menu.classList.remove("sticky");
//     }
// };

// // Применение debounce к функции stickyMenu с задержкой в 100 миллисекунд
// const debouncedStickyMenu = debounce(stickyMenu, 100);
//
// // Обработчик события прокрутки страницы
// window.addEventListener('scroll', debouncedStickyMenu);


// Ищем все таблицы в контейнере content-grid
const tables = document.querySelectorAll('.content-grid > table');

// Проходимся по каждой таблице
tables.forEach(table => {
    // Проверяем, есть ли родительский div с классом table-responsive
    if (!table.closest('.table-responsive')) {
        // Если нет, оборачиваем таблицу в div с классом table-responsive
        const wrapper = document.createElement('div');
        wrapper.classList.add('table-responsive');
        table.parentNode.insertBefore(wrapper, table);
        wrapper.appendChild(table);
    }
});
