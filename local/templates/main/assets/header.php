<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <!--  fav icon  -->
    <link rel="apple-touch-icon" sizes="76x76" href="../local/templates/main/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../local/templates/main/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../local/templates/main/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../local/templates/main/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../local/templates/main/assets/images/favicon/safari-pinned-tab.svg" color="#1d71b9">
    <meta name="msapplication-TileColor" content="#1d71b9">
    <meta name="theme-color" content="#ffffff">

    <!-- style's -->
    <!--  fancybox  -->
    <link rel="stylesheet" href="../local/templates/main/assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="../local/templates/main/assets/css/media.css">

    <!--  script's  -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="module" src="../local/templates/main/assets/js/app.js"></script>
    <script src="../local/templates/main/assets/js/swiper.js"></script>
    <script src="../local/templates/main/assets/js/main.min.js" defer></script>
    <script src="../local/templates/main/assets/js/index.js" defer></script>
    <!-- файл var нужен только на главной -->
    <script src="../local/templates/main/assets/js/var.js" defer></script>
</head>

<body>

<!-- preloader -->
<div id="preloader">
    <svg width="113" height="75" viewBox="0 0 113 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.6641 20C12.6641 30.9333 12.9307 40 13.3307 40C13.7307 40 19.4641 36.2667 25.9974 31.8667L37.9974 23.6V11.8667V-2.08616e-06H25.3307H12.6641V20Z" fill="#1D71B8" class="svg-elem-1"></path>
        <path d="M43.9979 28.7969L1.33125 57.4635L0.93125 66.1302L0.53125 74.7969L43.7313 45.9969L86.9313 17.1969L99.8646 23.9969L112.665 30.9302V22.2635V13.5969L99.7313 6.93021L86.6646 0.263535L43.9979 28.7969Z" fill="#1D71B8" class="svg-elem-2"></path>
        <path d="M68.9274 37.8641C59.9941 43.9974 52.2608 49.3307 51.7274 49.7307C51.3274 50.2641 64.7941 50.6641 81.8608 50.6641H112.794L112.394 45.0641C111.994 39.5974 111.861 39.4641 100.127 33.0641C93.5941 29.5974 87.5941 26.6641 86.7941 26.7974C85.9941 26.7974 77.9941 31.8641 68.9274 37.8641Z" fill="#1D71B8" class="svg-elem-3"></path>
        <path d="M26.932 65.8641C21.332 69.7307 16.2654 73.3307 15.732 73.8641C15.332 74.2641 36.932 74.6641 63.732 74.6641H112.665V66.6641V58.6641L75.0654 58.7974H37.332L26.932 65.8641Z" fill="#1D71B8" class="svg-elem-4"></path>
    </svg>

</div>
<!-- wrapper -->
<div class="wrapper">
    <!-- top-page -->
    <div class="top-page">
        <div class="container">
            <div class="top-page__inner">
                <form class="top-page__geo">
                    <div class="top-page__geo-top">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.20858 6.08337C6.40441 6.08337 5.75024 6.73754 5.75024 7.54254C5.75024 8.34671 6.40441 9.00004 7.20858 9.00004C8.01274 9.00004 8.66691 8.34671 8.66691 7.54254C8.66691 6.73754 8.01274 6.08337 7.20858 6.08337M7.20858 10.25C5.71524 10.25 4.50024 9.03587 4.50024 7.54254C4.50024 6.04837 5.71524 4.83337 7.20858 4.83337C8.70191 4.83337 9.91691 6.04837 9.91691 7.54254C9.91691 9.03587 8.70191 10.25 7.20858 10.25" fill="white"/>
                            <mask id="mask0_1_215" style="mask-type:luminance" x="0" y="0" width="15" height="17">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.333252 0.666687H14.0828V16.9167H0.333252V0.666687Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_1_215)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.20776 1.91669C4.1061 1.91669 1.58276 4.46419 1.58276 7.59419C1.58276 11.5767 6.26943 15.4567 7.20776 15.6634C8.1461 15.4559 12.8328 11.5759 12.8328 7.59419C12.8328 4.46419 10.3094 1.91669 7.20776 1.91669V1.91669ZM7.20776 16.9167C5.71276 16.9167 0.332764 12.29 0.332764 7.59419C0.332764 3.77419 3.41693 0.666687 7.20776 0.666687C10.9986 0.666687 14.0828 3.77419 14.0828 7.59419C14.0828 12.29 8.70276 16.9167 7.20776 16.9167V16.9167Z" fill="white"/>
                            </g>
                        </svg>
                        <span>Геолокация</span>
                        <div class="top-page__geo-arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0176 5.31051C12.8401 5.133 12.5623 5.11686 12.3666 5.2621L12.3105 5.31051L7.9974 9.6234L3.68428 5.31051C3.50677 5.133 3.229 5.11686 3.03325 5.2621L2.97718 5.31051C2.79966 5.48802 2.78353 5.7658 2.92876 5.96154L2.97718 6.01761L7.64384 10.6843C7.82135 10.8618 8.09913 10.8779 8.29487 10.7327L8.35095 10.6843L13.0176 6.01762C13.2129 5.82235 13.2129 5.50577 13.0176 5.31051Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <div class="top-page__geo-body">
                       <div class="top-page__geo-box">
                           <label for="l1"><input name="city" type="radio" name="" id="l1"><span>Астана</span></label>
                           <label for="l2"><input name="city" type="radio" name="" id="l2"><span>Армавир</span></label>
                           <label for="l3"><input name="city" type="radio" name="" id="l3"><span>Астрахань</span></label>
                           <label for="l4"><input name="city" type="radio" name="" id="l4"><span>Анапа</span></label>
                           <label for="l5"><input name="city" type="radio" name="" id="l5"><span>Адлер</span></label>
                           <label for="l6"><input name="city" type="radio" name="" id="l6"><span>Адлер</span></label>
                           <label for="l7"><input name="city" type="radio" name="" id="l7"><span>Адлер</span></label>
                       </div>
                    </div>
                </form>
                <div class="top-page__reg">
                    <a href="">Регистрация</a>
                    <span></span>
                    <a href="">Вход</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="#" class="logo">
                    <!-- Смена логотипа на темный при открытии меню, на телефонах (768 <) -->
                    <picture>
                        <img class="logo-image logo-image_black" src="../local/templates/main/assets/images/logo.svg" alt="Логотип компании бименд">
                        <img class="logo-image logo-image_white logo-image_none" src="../local/templates/main/assets/images/logo_white.svg" alt="Логотип компании бименд">
                    </picture>
                </a>
                <button class="header__btn-burger">
                    <span></span>
                </button>
                <nav class="header__navigation">
                    <ul>
                        <li class="header__navigation-item"><a href="">Конструктор</a></li>
                        <li class="header__navigation-item"><a href="">Поставщики</a></li>
                        <li class="header__navigation-item"><a href="">Тендеры</a></li>
                        <li class="header__navigation-item"><a href="">Журналы</a></li>
                        <!--  На десктопе скрыты (header__navigation-item_desk-none), мобильное меню -->
                        <li class="header__navigation-item header__navigation-item_desk-none"><a href="">Помощь</a></li>
                        <li class="header__navigation-item header__navigation-item_desk-none"><a href="">О компании</a></li>
                    </ul>
                    <!-- На десктопе скрыт, мобильное меню -->
                    <div class="header__navigation-media">
                        <p>Мы в соц. сетях:</p>
                        <div class="header__navigation-media-list">
                            <a href="">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="34" height="34" rx="17" fill="url(#paint0_radial_27_2147)"/>
                                    <path d="M17 10.0361C19.253 10.0361 19.5602 10.0361 20.4819 10.0361C21.3012 10.0361 21.7108 10.241 22.0181 10.3434C22.4277 10.5482 22.7349 10.6506 23.0422 10.9578C23.3494 11.2651 23.5542 11.5723 23.6566 11.9819C23.759 12.2892 23.8614 12.6988 23.9639 13.5181C23.9639 14.4398 23.9639 14.6446 23.9639 17C23.9639 19.3554 23.9639 19.5602 23.9639 20.4819C23.9639 21.3012 23.759 21.7108 23.6566 22.0181C23.4518 22.4277 23.3494 22.7349 23.0422 23.0422C22.7349 23.3494 22.4277 23.5542 22.0181 23.6566C21.7108 23.759 21.3012 23.8614 20.4819 23.9639C19.5602 23.9639 19.3554 23.9639 17 23.9639C14.6446 23.9639 14.4398 23.9639 13.5181 23.9639C12.6988 23.9639 12.2892 23.759 11.9819 23.6566C11.5723 23.4518 11.2651 23.3494 10.9578 23.0422C10.6506 22.7349 10.4458 22.4277 10.3434 22.0181C10.241 21.7108 10.1386 21.3012 10.0361 20.4819C10.0361 19.5602 10.0361 19.3554 10.0361 17C10.0361 14.6446 10.0361 14.4398 10.0361 13.5181C10.0361 12.6988 10.241 12.2892 10.3434 11.9819C10.5482 11.5723 10.6506 11.2651 10.9578 10.9578C11.2651 10.6506 11.5723 10.4458 11.9819 10.3434C12.2892 10.241 12.6988 10.1386 13.5181 10.0361C14.4398 10.0361 14.747 10.0361 17 10.0361ZM17 8.5C14.6446 8.5 14.4398 8.5 13.5181 8.5C12.5964 8.5 11.9819 8.70482 11.4699 8.90964C10.9578 9.11446 10.4458 9.42169 9.93374 9.93374C9.42169 10.4458 9.21687 10.8554 8.90964 11.4699C8.70482 11.9819 8.60241 12.5964 8.5 13.5181C8.5 14.4398 8.5 14.747 8.5 17C8.5 19.3554 8.5 19.5602 8.5 20.4819C8.5 21.4036 8.70482 22.0181 8.90964 22.5301C9.11446 23.0422 9.42169 23.5542 9.93374 24.0663C10.4458 24.5783 10.8554 24.7831 11.4699 25.0904C11.9819 25.2952 12.5964 25.3976 13.5181 25.5C14.4398 25.5 14.747 25.5 17 25.5C19.253 25.5 19.5602 25.5 20.4819 25.5C21.4036 25.5 22.0181 25.2952 22.5301 25.0904C23.0422 24.8855 23.5542 24.5783 24.0663 24.0663C24.5783 23.5542 24.7831 23.1446 25.0904 22.5301C25.2952 22.0181 25.3976 21.4036 25.5 20.4819C25.5 19.5602 25.5 19.253 25.5 17C25.5 14.747 25.5 14.4398 25.5 13.5181C25.5 12.5964 25.2952 11.9819 25.0904 11.4699C24.8855 10.9578 24.5783 10.4458 24.0663 9.93374C23.5542 9.42169 23.1446 9.21687 22.5301 8.90964C22.0181 8.70482 21.4036 8.60241 20.4819 8.5C19.5602 8.5 19.3554 8.5 17 8.5Z" fill="white"/>
                                    <path d="M17 12.5964C14.5422 12.5964 12.5964 14.5422 12.5964 17C12.5964 19.4578 14.5422 21.4036 17 21.4036C19.4578 21.4036 21.4036 19.4578 21.4036 17C21.4036 14.5422 19.4578 12.5964 17 12.5964ZM17 19.8675C15.4639 19.8675 14.1325 18.6386 14.1325 17C14.1325 15.4639 15.3614 14.1325 17 14.1325C18.5361 14.1325 19.8675 15.3614 19.8675 17C19.8675 18.5361 18.5361 19.8675 17 19.8675Z" fill="white"/>
                                    <path d="M21.506 13.5181C22.0716 13.5181 22.5301 13.0596 22.5301 12.494C22.5301 11.9284 22.0716 11.4699 21.506 11.4699C20.9404 11.4699 20.4819 11.9284 20.4819 12.494C20.4819 13.0596 20.9404 13.5181 21.506 13.5181Z" fill="white"/>
                                    <defs>
                                        <radialGradient id="paint0_radial_27_2147" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(34.684 0.690626) scale(78.5161)">
                                            <stop stop-color="#F9ED32"/>
                                            <stop offset="0.36" stop-color="#EE2A7B"/>
                                            <stop offset="0.44" stop-color="#D22A8A"/>
                                            <stop offset="0.6" stop-color="#8B2AB2"/>
                                            <stop offset="0.83" stop-color="#1B2AF0"/>
                                            <stop offset="0.88" stop-color="#002AFF"/>
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="34" height="34" rx="17" fill="#0B84EE"/>
                                    <path d="M18.4089 17.3101H21.5728L22.0695 14.0765H18.4083V12.3092C18.4083 10.9659 18.8445 9.77472 20.0935 9.77472H22.1004V6.95283C21.7478 6.90492 21.002 6.80005 19.5929 6.80005C16.6504 6.80005 14.9253 8.36345 14.9253 11.9253V14.0765H11.9004V17.3101H14.9253V26.1979C15.5243 26.2885 16.1311 26.35 16.7539 26.35C17.317 26.35 17.8665 26.2983 18.4089 26.2245V17.3101Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="34" height="34" rx="17" fill="#0077FF"/>
                                    <path d="M17.8355 22.95C11.4465 22.95 7.80223 18.4831 7.65039 11.05H10.8508C10.9559 16.5057 13.3153 18.8166 15.1841 19.2931V11.05H18.1976V15.7553C20.0431 15.5528 21.982 13.4086 22.6361 11.05H25.6496C25.4031 12.2733 24.9118 13.4315 24.2064 14.4522C23.5009 15.4729 22.5966 16.3342 21.5498 16.9822C22.7182 17.5743 23.7502 18.4123 24.5777 19.441C25.4052 20.4697 26.0094 21.6657 26.3504 22.95H23.0332C22.7271 21.8345 22.105 20.8359 21.2448 20.0795C20.3846 19.323 19.3246 18.8422 18.1976 18.6975V22.95H17.8355Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="34" height="34" rx="17" fill="#27A6E5"/>
                                    <path d="M23.8004 10.7118L21.2458 24.0484C21.2458 24.0484 20.8883 24.973 19.9065 24.5296L14.0123 19.8496L13.9849 19.8358C14.7811 19.0955 20.9549 13.3472 21.2248 13.0867C21.6425 12.6831 21.3831 12.4429 20.8982 12.7477L11.7787 18.745L8.26038 17.5191C8.26038 17.5191 7.70671 17.3152 7.65344 16.8717C7.59948 16.4275 8.27861 16.1873 8.27861 16.1873L22.6216 10.3606C22.6216 10.3606 23.8004 9.82419 23.8004 10.7118Z" fill="#FEFEFE"/>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="34" height="34" rx="17" fill="#48C95F"/>
                                    <path d="M23.7378 10.2531C22.0585 8.57971 19.8195 7.65002 17.4561 7.65002C12.5427 7.65002 8.56219 11.6167 8.56219 16.513C8.56219 18.0625 8.99756 19.612 9.7439 20.9136L8.5 25.5L13.2268 24.2604C14.5329 24.9422 15.9634 25.3141 17.4561 25.3141C22.3695 25.3141 26.35 21.3474 26.35 16.4511C26.2878 14.1578 25.4171 11.9266 23.7378 10.2531ZM21.7476 19.674C21.561 20.1698 20.6902 20.6656 20.2549 20.7276C19.8817 20.7896 19.3841 20.7896 18.8866 20.6656C18.5756 20.5417 18.1402 20.4177 17.6427 20.1698C15.4037 19.2401 13.9732 17.0089 13.8488 16.8229C13.7244 16.699 12.9159 15.6453 12.9159 14.5297C12.9159 13.4141 13.4756 12.9183 13.6622 12.6703C13.8488 12.4224 14.0976 12.4224 14.2841 12.4224C14.4085 12.4224 14.5951 12.4224 14.7195 12.4224C14.8439 12.4224 15.0305 12.3604 15.2171 12.7943C15.4037 13.2281 15.839 14.3438 15.9012 14.4058C15.9634 14.5297 15.9634 14.6537 15.9012 14.7776C15.839 14.9016 15.7768 15.0255 15.6524 15.1495C15.528 15.2735 15.4037 15.4594 15.3415 15.5214C15.2171 15.6453 15.0927 15.7693 15.2171 15.9552C15.3415 16.2031 15.7768 16.8849 16.461 17.5047C17.3317 18.2485 18.0159 18.4964 18.2646 18.6203C18.5134 18.7443 18.6378 18.6823 18.7622 18.5584C18.8866 18.4344 19.322 17.9386 19.4463 17.6906C19.5707 17.4427 19.7573 17.5047 19.9439 17.5667C20.1305 17.6287 21.25 18.1865 21.4366 18.3104C21.6854 18.4344 21.8098 18.4964 21.8719 18.5584C21.9341 18.7443 21.9341 19.1781 21.7476 19.674Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- main -->
    <main class="main">
