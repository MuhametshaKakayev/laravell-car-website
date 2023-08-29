<!DOCTYPE html>
<html lang="TR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />


</head>

<body>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class="ri-steering-line"></i>
                Star Otomativ
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">


                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Ana Sayfa</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Çeşitler</a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Populer arabalar</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__l ink">İletişim</a>
                    </li>


                    <li class="nav__item">

                        @if (Route::has('login'))
                            @auth


                            <li class="nav__item">
                                <a class="nav__link" href="{{ route("showcart") }}" > Sepet</a>

                            </li>

                            <li class="nav_item"> <x-app-layout class="overlay"> </x-app-layout></li>
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}"">Giriş yap</a></li>

                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}"">Kayıt ol</a></li>
                        @endif

                    @endauth

                    @endif

                    </li>



                </ul>
                <x-success-status class="mb-4" :status="session('message')" />
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            {{-- <div class="shape shape__big"></div>
            <div class="shape shape__small"></div> --}}

            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">Welcome</h1>

                    <h2 class="home__subtitle"></h2>

                    <h3 class="home__elec">
                        <i class="ri-flashlight-fill"></i>
                    </h3>
                </div>

                <div class="direction-home">
                    <div class="car">
                        <img src="assets/img/home.png" alt="" class="home__img" />

                        <div class="home__car">
                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-temp-cold-line"></i>
                                </div>
                                <h2 class="home__car-number">Porsche</h2>
                                <h3 class="home__car-name">Marka</h3>
                            </div>

                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-dashboard-3-line"></i>
                                </div>
                                <h2 class="home__car-number">Elektrik</h2>
                                <h3 class="home__car-name">Motor</h3>
                            </div>

                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-flashlight-fill"></i>
                                </div>
                                <h2 class="home__car-number">250000</h2>
                                <h3 class="home__car-name">Fiyat</h3>
                            </div>
                        </div>
                    </div>
                    <div class="car">
                        <img src="assets/img/home1.png" alt="" class="home__img" />

                        <div class="home__car">
                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-temp-cold-line"></i>
                                </div>
                                <h2 class="home__car-number">Porsche</h2>
                                <h3 class="home__car-name">Marka</h3>
                            </div>

                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-dashboard-3-line"></i>
                                </div>
                                <h2 class="home__car-number">benzin</h2>
                                <h3 class="home__car-name">Motor</h3>
                            </div>

                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-flashlight-fill"></i>
                                </div>
                                <h2 class="home__car-number">250000</h2>
                                <h3 class="home__car-name">Fiyat</h3>
                            </div>
                        </div>
                    </div>
                    <div class="car">
                        <img src="assets/img/home2.png" alt="" class="home__img" />

                        <div class="home__car">
                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-temp-cold-line"></i>
                                </div>
                                <h2 class="home__car-number">Porsche</h2>
                                <h3 class="home__car-name">Marka</h3>
                            </div>

                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-dashboard-3-line"></i>
                                </div>
                                <h2 class="home__car-number">Benzin</h2>
                                <h3 class="home__car-name">Motor</h3>
                            </div>

                            <div class="home__car-data">
                                <div class="home__car-icon">
                                    <i class="ri-flashlight-fill"></i>
                                </div>
                                <h2 class="home__car-number">170000</h2>
                                <h3 class="home__car-name">Fiyat</h3>
                            </div>
                        </div>


                    </div>
                </div>
                <a href="#featured" class="home__button">BAŞLA</a>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Pöpüler Otomobiller
            </h2>

            <div class="popular__container container swiper">
                <div class="swiper-wrapper" id="pop_araba">

                    @foreach ($populers as $araba)
                        <article class="popular__card swiper-slide">
                            <h3 class="popular__subtitle">{{ $araba->model }}</h3>
                            <h1 class="popular__title">{{ $araba->marka }}</h1>
                            <h3 class="popular__subtitle">{{ $araba->fiyat }}</h3>
                            <img src="{{ $araba->src }}" alt="" class="popular__img">
                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 Sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 356 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Electric
                                </div>
                            </div>
                            <h3 class="popular__price">{{ $araba->fiyat }}</h3>
                            <button class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-bullets-dynamic"
                    style="width: 80px;">
                    <span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main"
                        style="left: 32px;" aria-current="true"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active-next"
                        style="left: 32px;"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active-next-next"
                        style="left: 32px;"></span>
                    <span class="swiper-pagination-bullet" style="left: 32px;"></span>
                    <span class="swiper-pagination-bullet" style="left: 32px;"></span>
                </div>
            </div>
        </section>




        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class="section__title" id="cars">Lüks Otomobiller</h2>
            <div class="featured__container container">
                <ul class="featured__filters">

                    <li>
                        <button class="featured__item" data-filter=".tesla">
                            <img src="assets/img/logo3.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".audi">
                            <img src="assets/img/logo2.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".porsche">
                            <img src="assets/img/logo1.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item active-featured" data-filter="all">
                            <span>Tum</span>
                        </button>
                    </li>
                </ul>
                <div class="featured__content grid" id=araba_info>

                    @foreach ($arabalars as $logo)
                        <article class="">

                            <div class="featured__card mix tesla"id="">
                                <div class="shape shape__smaller"></div>

                                <h1 class="featured__title">{{ $logo->adi }}</h1>

                                <h3 class="featured__subtitle">{{ $logo->marka }}</h3>

                                <img src={{ $logo->resim }} alt="" class="featured__img" />

                                <h3 class="featured__price">${{ $logo->fiyat }}</h3>



                                <form action="{{ route('addcart', ['id' => $logo->id]) }}" method="POST">

                                    @csrf
                                    {{-- <input type="radio" value="3" min="1" class="form-control" --}}

                                    <br>

                                    <input class="btn btn-primary" type="submit" value="sepete ekle"
                                        name="quantity">

                                </form>
                            </div>
                            <div class="shape shape__smaller"></div>
                        </article>
                    @endforeach

                </div>

                <!--==================== OFFER ====================-->
                <section class="offer section">
                    <div class="offer__container container grid">
                        <img src="assets/img/offer-bg.png" alt="" class="offer__bg" />

                        <div class="offer__data">
                            <h2 class="section__title offer__title">
                                Özel Teklifler Almak <br />
                                İster misiniz?
                            </h2>

                            <p class="offer__description">
                                E-posta listemize abone olarak yeni arabalarımız
                                hakkında tüm bilgileri e-posta ile ilk alan siz olun.
                            </p>

                            <a href="#" class="button"> Abone Ol </a>
                        </div>

                        <img src="assets/img/offer.png" alt="" class="offer__img" />
                    </div>
                </section>
                <!--==================== ABOUT ====================-->
                <section class="about section" id="about">
                    <div class="about__container container grid">
                        <div class="features__container container grid">
                            <div class="features__group">
                                <img src="assets/img/features.png" alt="" class="features__img">

                                <div class="features__card features__card-1">
                                    <h3 class="features__card-title">800</h3>
                                    <p class="features__card-description">HP <br> </p>
                                    </p>
                                </div>

                                <div class="features__card features__card-2">
                                    <h3 class="features__card-title">500</h3>
                                    <p class="features__card-description">Km <br> Range</p>
                                </div>

                                <div class="features__card features__card-3">
                                    <h3 class="features__card-title">350</h3>
                                    <p class="features__card-description">Km <br> Maks speed</p>
                                </div>
                            </div>
                            <img src="assets/img/map.svg" alt="" class="features__map">
                        </div>
                        <div class="about__group">
                            <div>
                                <h2>By Telephone</h2>
                                <p style="padding-left: 30px;">Telephone No.: 0555 555 55 55</p>
                                <p>&nbsp;</p>
                                <h2>By Post</h2>
                                <p>Address:</p>
                                <p style="padding-left: 30px;">Car Dealer Website Ltd<br><br>
                                    Merkez<br>Siirt<br>Turkiye</p>
                                <p style="padding-left: 30px;">&nbsp;</p>
                                <p style="padding-left: 30px;">&nbsp;</p>
                                <p style="padding-left: 30px;">Company No.: 7777777<br>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--==================== LOGOS ====================-->
                <section class="logos section">
                    <div class="logos__container container grid" id="logos__container">
                        @foreach ($logolar as $logo1)
                            <div class="logos__content">
                                <img src={{ $logo1->resim }} alt="11" class="logos__img">
                            </div>
                        @endforeach
                </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>

        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-steering-line"></i> Star Otomativ
                </a>
                <p class="footer__description">
                    Dünyanın en iyi,en tanınmış <br />
                    markaları sunuyoruz <br />
                </p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Şirket</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Hakkında</a>
                    </li>
                    <li>
                        <a href="#cars" class="footer__link">Arabalar</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Tarih</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Mağaza</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Takip et</h3>

                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-line"></i>
                    </a>
                </ul>
            </div>
        </div>
        <span class="footer__copy">Star Otomotiv </span>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP JS ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MENU JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
