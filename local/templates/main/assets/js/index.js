document.addEventListener("DOMContentLoaded", ()=> {
    // выбор гео-локации
    if (document.querySelector('.top-page__geo')) {
        const topGeo = document.querySelector('.top-page__geo-top');
        const bodyGeo = document.querySelector('.top-page__geo-body');
        const txtContent = document.querySelector('.top-page__geo-top span');
        const labelContent = document.querySelectorAll('.top-page__geo-box label');

        topGeo.addEventListener('click', ()=> {
            topGeo.classList.toggle('active');
            bodyGeo.classList.toggle('active');
        });

        // скрытие блока
        document.querySelector('.main').addEventListener('click', ()=> {
            topGeo.classList.remove('active');
            bodyGeo.classList.remove('active');
        });


        // Замена текста верхняя геолакация
        labelContent.forEach(item=> {
            item.addEventListener('click', ()=> {
                txtContent.textContent = item.textContent
            })
        })
    }

    // fancyBox bind
    Fancybox.bind("[data-fancybox]");

    // burger btn
    if(document.querySelector('.header__btn-burger')) {
        let btnBurger = document.querySelector('.header__btn-burger');
        let menuNav = document.querySelector('.header__navigation');
        let headerInner = document.querySelector('.header__inner');
        let logoWhite = document.querySelector('.logo-image_white');
        let logoBlack = document.querySelector('.logo-image_black');
        let geoTop = document.querySelector('.top-page__geo-top');
        let geoBody = document.querySelector('.top-page__geo-body')

        btnBurger.addEventListener('click', ()=> {
            window.setTimeout(()=> {
                btnBurger.classList.toggle('active');
            },500)
            menuNav.classList.toggle('active');
            headerInner.classList.toggle('active');
            document.querySelector('body').classList.toggle('hid');
            if(headerInner.classList.contains('active') == true) {
                window.setTimeout(()=> {
                    logoWhite.classList.remove('logo-image_none');
                    logoBlack.classList.add('logo-image_none')
                },400)
            }
            else {
                logoWhite.classList.add('logo-image_none');
                logoBlack.classList.remove('logo-image_none')
            }

            geoTop.classList.remove('active');
            geoBody.classList.remove('active');
        });
    }

    // Скрытие на esc
    document.addEventListener('keydown', (event)=> {
        // geo
        let geoTop = document.querySelector('.top-page__geo-top');
        let geoBody = document.querySelector('.top-page__geo-body');

        if(event.keyCode == '27' || event.keyCode == 'Escape') {
            geoTop.classList.remove('active');
            geoBody.classList.remove('active');
        }
    });
    //

    // preloader
    if(document.querySelector('#preloader')) {
        let preloader = document.querySelector('#preloader');
        window.setTimeout(()=> {
            preloader.classList.add('hid')
        },1000);
    }

    // slider swiper

    const newsSlider = new Swiper('.news__slider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 2,
        slidesToScroll:1,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            pauseOnMouseEnter:true,
            waitForTransition:false,
        },
        breakpoints: {
            1441: {
                spaceBetween: 30,
                slidesPerView: 2,
            },
            1440: {
                spaceBetween: 20,
                slidesPerView: 2,
            },
            1281: {
                spaceBetween: 20,
                slidesPerView: 2,
            },
            1280: {
                spaceBetween: 30,
                slidesPerView: 2,
            },
            1000: {
                spaceBetween: 30,
                slidesPerView: 2,
            },
            992: {
                spaceBetween: 20,
                slidesPerView: 2,
            },
            769: {
                spaceBetween: 20,
                slidesPerView: 2,
            },
            768: {
                spaceBetween: 23,
                slidesPerView: 1,
                grid: {
                    rows: 2,
                    columns: 1,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            },
            270: {
                spaceBetween: 23,
                slidesPerView:1,
                grid: {
                    rows: 2,
                    columns: 1,

                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            },
        },

    })

});



