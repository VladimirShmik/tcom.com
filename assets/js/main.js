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
        },
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
    return "light"; // Возвращаем значение "light" по умолчанию, если ничего не найдено
}

function updateButton({ buttonEls, currentTheme }) {
    buttonEls.forEach(buttonEl => {
        const [lightBtn, darkBtn] = buttonEl.querySelectorAll('.theme-button__btn');

        if (currentTheme === "dark") {
            darkBtn.classList.add('theme-button__btn--selected');
            lightBtn.classList.remove('theme-button__btn--selected');
        } else {
            lightBtn.classList.add('theme-button__btn--selected');
            darkBtn.classList.remove('theme-button__btn--selected');
        }
    });
}

function updateThemeOnHtmlEl({ theme }) {
    document.querySelector("html").setAttribute("data-theme", theme);
}

const buttons = document.querySelectorAll(".theme-button");
const localStorageTheme = localStorage.getItem("theme");
const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");

let currentThemeSetting = calculateSettingAsThemeString({ localStorageTheme, systemSettingDark });
updateButton({ buttonEls: buttons, currentTheme: currentThemeSetting });
updateThemeOnHtmlEl({ theme: currentThemeSetting });

buttons.forEach(button => {
    button.addEventListener("click", (event) => {
        const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

        localStorage.setItem("theme", newTheme);
        updateButton({ buttonEls: buttons, currentTheme: newTheme });
        updateThemeOnHtmlEl({ theme: newTheme });

        currentThemeSetting = newTheme;
    });
});



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

document.addEventListener("DOMContentLoaded", () => {
    const animatedBlocks = document.querySelectorAll('.guides-list .guides-link');

    const checkScroll = () => {
        const scrollPosition = window.innerHeight;

        animatedBlocks.forEach((block, index) => {
            const blockPosition = block.getBoundingClientRect().top;
            const transitionDelay = (index + 1) * 0.05; // Увеличиваем задержку анимации для каждого последующего элемента

            if (blockPosition < scrollPosition) {
                block.style.transition = `0.1s ease-in-out ${transitionDelay}s all`; // Применяем задержку анимации
                block.classList.add('guides-link--animate');
            } else {
                block.style.transition = ''; // Сбрасываем задержку анимации
                block.classList.remove('guides-link--animate');
            }
        });
    };

    window.addEventListener('scroll', checkScroll);
});
document.addEventListener("DOMContentLoaded", () => {
    const animatedBlocks = document.querySelectorAll('.gallery-grid .gallery-item');

    const checkScroll = () => {
        const scrollPosition = window.innerHeight;

        animatedBlocks.forEach((block, index) => {
            const blockPosition = block.getBoundingClientRect().top;
            const transitionDelay = (index + 1) * 0.05; // Увеличиваем задержку анимации для каждого последующего элемента

            if (blockPosition < scrollPosition) {
                block.style.transition = `0.1s ease-in-out ${transitionDelay}s all`; // Применяем задержку анимации
                block.classList.add('gallery-item--animate');
            } else {
                block.style.transition = ''; // Сбрасываем задержку анимации
                block.classList.remove('gallery-item--animate');
            }
        });
    };

    window.addEventListener('scroll', checkScroll);
});


