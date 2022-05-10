<?php
include 'components/connection.php';
$products = mysqli_query($conn, "SELECT * FROM `catalog` WHERE `price-with-sale` != '' ORDER BY `name` DESC LIMIT 4");
?>
<!DOCTYPE php>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Главная</title>
</head>

<body>
    <?php
    include '_popup.php';
    ?>
    <div class="preview">
        <div class="preview__header">
            <div class="preview__logo">
                <picture>
                    <source srcset="img/logo.webp" type="image/webp"><img class="logo" src="img/logo.png" alt="logo">
                </picture>
            </div>
        </div>
        <div class="preview__container border-container">
            <div class="preview__content">
                <div class="preview__text text">
                    <h2 class="preview__title">
                        У вас на носу важный день, <br>
                        <span class="paragraph-margin">возьмите платье у нас, </span> <br>
                        <span class="paragraph-margin">чтобы вашем платье вспоминали </span>
                    </h2>
                    <p class="preview__paragraph text">
                        НЕ оставляйте поиск платья невесты на самый последний момент, ведь выбирать подходящий наряд в
                        спешке и суете за две недели до свадьбы — то еще испытание!
                    </p>
                    <a class="preview__btn btn form__link" href="#">
                        Записаться на примерку уже сейчас
                        <svg width="32" height="8" viewBox="0 0 32 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.3536 4.35355C31.5488 4.15829 31.5488 3.84171 31.3536 3.64645L28.1716 0.464466C27.9763 0.269204 27.6597 0.269204 27.4645 0.464466C27.2692 0.659728 27.2692 0.976311 27.4645 1.17157L30.2929 4L27.4645 6.82843C27.2692 7.02369 27.2692 7.34027 27.4645 7.53553C27.6597 7.7308 27.9763 7.7308 28.1716 7.53553L31.3536 4.35355ZM0 4.5H31V3.5H0V4.5Z" fill="#3A241C" />
                        </svg>
                    </a>
                </div>
                <div class="preview__img">
                    <picture>
                        <source srcset="img/photo-preview.webp" type="image/webp"><img class="section-img" src="img/photo-preview.jpg" alt="preview">
                    </picture>
                </div>
            </div>
        </div>
        <div class="container preview__social social">
            <a class="social__link" href="#">
                <picture>
                    <source srcset="img/social/inst.webp" type="image/webp"><img class="social__icon" src="img/social/inst.png" alt="inst">
                </picture>
            </a>
            <a class="social__link" href="#">
                <picture>
                    <source srcset="img/social/vk.webp" type="image/webp"><img class="social__icon" src="img/social/vk.png" alt="vk">
                </picture>
            </a>
            <a class="social__link" href="#">
                <picture>
                    <source srcset="img/social/yt.webp" type="image/webp"><img class="social__icon" src="img/social/yt.png" alt="yt">
                </picture>
            </a>
        </div>
    </div>
    <div class="body">
        <?php
        include '_header.php';
        ?>
        <main class="page">
            <section class="about">
                <div class="about__container border-container">
                    <div class="about__text">
                        <h2 class="about__title title">
                            О нас
                        </h2>
                        <p class="about__paragraph">
                            Свадебный салон “Невеста” является
                            представителем особенных платьев в Омске.
                            Для невест которые устали от однообразия, для невест с характером и уникальным взглядом на
                            жизнь.
                        </p>
                    </div>
                    <div class="about__img">
                        <picture>
                            <source srcset="img/photo-about.webp" type="image/webp"><img class="section-img" src="img/photo-about.jpg" alt="about">
                        </picture>
                    </div>
                </div>
            </section>
            <section class="sale">
                <div class="sale__container border-container">
                    <h2 class="sale__title title">
                        Скидки
                    </h2>
                    <div class="sale__content catalog__content">
                        <?php foreach ($products as $product) { ?>
                            <div class="catalog__item item" id="<?= $product['id'] ?>">
                                <div class="item__img">
                                    <img src="img/products/<?= $product['preview'] ?>" alt="<?= $product['name'] ?>">
                                </div>
                                <h3 class="item__title">
                                    <?= $product['name'] ?>
                                </h3>
                                <?php if ($product['price-with-sale'] != NULL) { ?>
                                    <div class="item__price item__price-past">
                                        <span class="past-number"><?= $product['price-with-sale'] ?></span> р
                                    </div>
                                <?php } ?>
                                <div class="item__price item__price-current">
                                    <span class="current-number"><?= $product['price'] ?></span> р
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section class="recommendation">
                <div class="recommendation__container container">
                    <h2 class="recommendation__title title">
                        Советы
                    </h2>
                    <div class="recommendation__content">
                        <div class="recommendation__text">
                            <p class="recommendation__paragraph">
                                Постарайтесь воздержаться от эффектного мейкапа, чтобы не испачкать платья помадой или
                                тональным кремом.
                            </p>
                            <p class="recommendation__paragraph">
                                НЕ выбирайте и не покупайте свадебное платье в тех салонах, которые вызывают у вас
                                неприятные ощущения и недоверие.
                            </p>
                            <p class="recommendation__paragraph">
                                НЕ забудьте взять с собой на примерку свадебную обувь — вы сможете сразу определить
                                необходимую длину наряда.
                            </p>
                            <p class="recommendation__paragraph">
                                НЕ красьтесь ярко перед примеркой.
                            </p>
                        </div>
                        <div class="recommendation__img">
                            <picture>
                                <source srcset="img/photo-recomendations.webp" type="image/webp"><img class="section-img" src="img/photo-recomendations.jpg" alt="about">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
            <section class="comments">
                <div class="comments__container border-container">
                    <h2 class="comments__title title">
                        Комментарии
                    </h2>
                    <div class="slider">
                        <div class="comments__slider">
                            <div class="slider__wrapper">
                                <div class="slider__item">
                                    <div class="slider__img">
                                        <img src="img/comments/comm2.jpg" alt="comment">
                                    </div>
                                    <div class="slider__text">
                                        <h3 class="slider__comment-author">
                                            Евгения Иванова
                                        </h3>
                                        <div class="slider__comment-text">
                                            Чуть больше месяца назад я заказала себе свадебное платье в салоне НЕВЕСТА. При первой же примерке консультанты салона поняли что я хочу, показали все подходящие мне варианты, а потом предложило соединить 2 разных платья, чтоб получить совершенно эксклюзивную модель. Идея мне понравилась и мы решили заказать такое платье на фабрике. Кстати платье шилось четко по моим размера!
                                            И вот, сегодня я получила СВОЮ МЕЧТУ. Лучше представить нельзя. Я безумно рада и теперь еще больше жду свадьбу.
                                        </div>
                                        <div class="slider__comment-info">
                                            Омск, 12 Марта 2022 год, 100 гостей
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464467C11.9763 0.269205 11.6597 0.269205 11.4645 0.464467C11.2692 0.659729 11.2692 0.976312 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM-4.37114e-08 4.5L15 4.5L15 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3A241C" />
                                        </svg>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646445 3.64645C0.451183 3.84171 0.451183 4.15829 0.646445 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.73079 7.34027 4.73079 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.73079 0.976311 4.73079 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646445 3.64645ZM16 3.5L0.999999 3.5V4.5L16 4.5V3.5Z" fill="#3A241C" />
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="slider__item">
                                    <div class="slider__img">
                                        <img src="img/comments/comm1.jpg" alt="comment">
                                    </div>
                                    <div class="slider__text">
                                        <h3 class="slider__comment-author">
                                            Валерия Мидинская
                                        </h3>
                                        <div class="slider__comment-text">
                                            Добрый день! Я - как и все невесты, мечтала об идеальном платье. Листала каталоги, перешарила интернет...и однажды, выиграла скидку в бонфлии, что было чертовски приятно! Приехав в салон, я примерила платья и нашла ТО САМОЕ! Счастью не было предела))) большое спасибо специалистам, которые помогали, подсказывали ,честно высказывая своё мнение - идёт платье или нет, что очень важно!!! Я очень счастлива, что вы помогли мне найти платье мечты)) спасибо))
                                        </div>
                                        <div class="slider__comment-info">
                                            Омск, 2 Марта 2022 год, 100 гостей
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464467C11.9763 0.269205 11.6597 0.269205 11.4645 0.464467C11.2692 0.659729 11.2692 0.976312 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM-4.37114e-08 4.5L15 4.5L15 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3A241C" />
                                        </svg>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646445 3.64645C0.451183 3.84171 0.451183 4.15829 0.646445 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.73079 7.34027 4.73079 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.73079 0.976311 4.73079 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646445 3.64645ZM16 3.5L0.999999 3.5V4.5L16 4.5V3.5Z" fill="#3A241C" />
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="slider__item">
                                    <div class="slider__img">
                                        <img src="img/comments/comm3.jpg" alt="comment">
                                    </div>
                                    <div class="slider__text">
                                        <h3 class="slider__comment-author">
                                            Алена Плотских
                                        </h3>
                                        <div class="slider__comment-text">
                                            Отличный салон с потрясающими по красоте платьями. Советую его подругам)))
                                        </div>
                                        <div class="slider__comment-info">
                                            Омск, 12 Февраля 2022 год, 50 гостей
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464467C11.9763 0.269205 11.6597 0.269205 11.4645 0.464467C11.2692 0.659729 11.2692 0.976312 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM-4.37114e-08 4.5L15 4.5L15 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3A241C" />
                                        </svg>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646445 3.64645C0.451183 3.84171 0.451183 4.15829 0.646445 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.73079 7.34027 4.73079 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.73079 0.976311 4.73079 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646445 3.64645ZM16 3.5L0.999999 3.5V4.5L16 4.5V3.5Z" fill="#3A241C" />
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div class="popup-card">
            <div class="popup-card__close close__bg"></div>
            <div class="popup__content">
                <div class="popup-card__close  close__btn">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="29" height="29" stroke="black" />
                        <line x1="1.35355" y1="0.646447" x2="29.3536" y2="28.6464" stroke="black" />
                        <line x1="0.646447" y1="29.6464" x2="29.6464" y2="0.646446" stroke="black" />
                    </svg>
                </div>
                <div class="popup__gallery">
                    <div class="popup__main-slider">
                        <div class="slider__wrapper">
                            <div class="main__slide">
                                <img src="img/items/photo-item1.jpg" alt="item">
                            </div>
                            <div class="main__slide">
                                <img src="img/items/photo-item2.jpg" alt="item">
                            </div>
                        </div>
                    </div>
                    <div class="popup-button-next">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464467C11.9763 0.269205 11.6597 0.269205 11.4645 0.464467C11.2692 0.659729 11.2692 0.976312 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM-4.37114e-08 4.5L15 4.5L15 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3A241C" />
                        </svg>
                    </div>
                    <div class="popup-button-prev">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.646445 3.64645C0.451183 3.84171 0.451183 4.15829 0.646445 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.73079 7.34027 4.73079 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.73079 0.976311 4.73079 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646445 3.64645ZM16 3.5L0.999999 3.5V4.5L16 4.5V3.5Z" fill="#3A241C" />
                        </svg>
                    </div>
                    <div class="popup__nav-slider">
                        <div class="slider__wrapper">
                            <div class="nav__slide">
                                <img src="img/items/photo-item1.jpg" alt="item">
                            </div>
                            <div class="nav__slide">
                                <img src="img/items/photo-item2.jpg" alt="item">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__card">
                    <h3 class="item__title">
                        wings
                    </h3>
                    <div class="item__info">
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Силуэт:
                            </div>
                            <div class="item__info-value">
                                в греческом стиле
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Цвета:
                            </div>
                            <div class="item__info-value">
                                белый
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Спина:
                            </div>
                            <div class="item__info-value">
                                закрытая
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Длина:
                            </div>
                            <div class="item__info-value">
                                длинное
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Цена:
                            </div>
                            <div class="item__info-value">
                                51400 р
                            </div>
                        </div>
                    </div>
                    <p class="item__description">
                        Свадебное платье в стиле минимализм сочетает в себе элегантность классики и свободу стиля бохо. Гладкий изысканный креп без декоративной отделки создает актуальный образ. Лиф с глубоким декольте и V-образным вырезом на спине дополняют объемные пышные рукава с широкими манжетами на пуговицах. От талии, подчеркнутой гладким простым поясом, струится мягкими волнами свободная юбка, оканчивающаяся шлейфом.
                    </p>
                    <a class="item__btn btn form__link" href="#">
                        Записаться на примерку
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '_footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper@6.3.5/swiper-bundle.min.js"></script>
    <script src="js/inputmask.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>