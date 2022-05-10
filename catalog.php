<?php
include 'components/connection.php';
$products = mysqli_query($conn, "SELECT * FROM `catalog`ORDER BY `name` DESC");
?>
<!DOCTYPE php>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Каталог</title>
</head>

<body>
    <?php
    include '_popup.php';
    include '_header.php';
    ?>
    <main class="page">
        <section class="catalog">
            <div class="catalog__container container">
                <h2 class="catalog__title">
                    Каталог
                    <span class='title-filter filter-none-color' id="title-color-w" style="display: none;">белые
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-color' id="title-color-c" style="display: none;">кремовые
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-color' id="title-color-l" style="display: none;">сиреневые
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>

                    <span class='title-filter filter-none-sil' id="title-silhouette-A" style="display: none;">А-силуэт
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-sil' id="title-silhouette-S" style="display: none;">С прямой юбкой
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-sil' id="title-silhouette-L" style="display: none;">С пышной юбкой
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-sil' id="title-silhouette-F" style="display: none;">Русалка
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-sil' id="title-silhouette-G" style="display: none;">В греческом стиле
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>

                    <span class='title-filter filter-none-lenght' id="title-lenght-long" style="display: none;">длинное платье со шлейфом
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-lenght' id="title-lenght-long-sh" style="display: none;">длинное платье без шлейфа
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                    <span class='title-filter filter-none-lenght' id="title-lenght-short" style="display: none;">короткое платье без шлейфа
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
                            <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
                            <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
                        </svg>
                    </span>
                </h2>
                <div class="catalog__wrapper">
                    <div class="catalog__filter filter">
                        <div class="filter__item">
                            <div class="filter__title">
                                Ценовая категория
                                <svg width="14" height="10" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 6L13 1" stroke="#3A241C" />
                                </svg>
                            </div>
                            <ul class="filter__list price">
                                <li class="filter__list-item" id="price-filter-m-50">
                                    до 50 000
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="price-filter-m-60">
                                    до 60 000
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="price-filter-b-60">
                                    от 60 000
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                        <div class="filter__item">
                            <div class="filter__title">
                                Цвет
                                <svg width="14" height="10" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 6L13 1" stroke="#3A241C" />
                                </svg>
                            </div>
                            <ul class="filter__list colors-filter">
                                <li class="filter__list-item" id="color-filter-w">
                                    Белые
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="color-filter-c">
                                    Кремовые
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>

                                </li>
                                <li class="filter__list-item" id="color-filter-l">
                                    Сиреневое
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                        <div class="filter__item">
                            <div class="filter__title style__title">
                                Фасон
                                <svg width="14" height="10" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 6L13 1" stroke="#3A241C" />
                                </svg>
                            </div>
                            <ul class="filter__list silhouette-filter">
                                <li class="filter__list-item" id="sil-filter-a">
                                    А-силуэт
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="sil-filter-s">
                                    С прямой юбкой
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="sil-filter-l">
                                    С пышной юбкой
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="sil-filter-f">
                                    Русалка
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="sil-filter-g">
                                    В греческом стиле
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                        <div class="filter__item">
                            <div class="filter__title style__title">
                                Длинна
                                <svg width="14" height="10" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 6L13 1" stroke="#3A241C" />
                                </svg>
                            </div>
                            <ul class="filter__list lenght-filter">
                                <li class="filter__list-item" id="length-filter-long-train">
                                    длинное платье со шлейфом
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="length-filter-long">
                                    длинное платье без шлейфа
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                                <li class="filter__list-item" id="length-filter-short">
                                    короткое платье без шлейфа
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.707108" width="1" height="13" transform="rotate(-45 0 0.707108)" fill="#3A241C" />
                                        <rect x="0.708008" y="9.8995" width="1" height="13" transform="rotate(-135 0.708008 9.8995)" fill="#3A241C" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="catalog__content">
                        <?php foreach ($products as $product) { ?>
                            <div class="catalog__item item 
                            <?php
                            if ($product['color'] == 'белое') {
                                echo "white-item";
                            };
                            if ($product['color'] == 'кремовое') {
                                echo "cream-item";
                            };
                            if ($product['color'] == 'сиреневое') {
                                echo "lilac-item";
                            };

                            if ($product['dress-length'] == 'длинное платье без шлейфа') {
                                echo " long-item";
                            };
                            if ($product['dress-length'] == 'длинное платье со шлейфом') {
                                echo " long-sh-item";
                            };
                            if ($product['dress-length'] == 'короткое платье без шлейфа') {
                                echo " short-item";
                            };

                            if ($product['silhouette'] == 'А-силует') {
                                echo " silhouetteA";
                            };
                            if ($product['silhouette'] == 'в греческом стиле') {
                                echo " silhouetteG";
                            };
                            if ($product['silhouette'] == 'русалка/рыбка') {
                                echo " silhouetteF";
                            };
                            if ($product['silhouette'] == 'с прямой юбкой') {
                                echo " silhouetteS";
                            };
                            if ($product['silhouette'] == 'с пышной юбкой') {
                                echo " silhouetteL";
                            };
                            ?>" id="<?= $product['id'] ?>">
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
            </div>
        </section>
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
                        </div>
                    </div>
                </div>
                <div class="item__card">
                    <h3 class="item__title">
                    </h3>
                    <div class="item__info">
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Силуэт:
                            </div>
                            <div class="item__info-value value-silhouette">
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Цвета:
                            </div>
                            <div class="item__info-value value-color">
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Спина:
                            </div>
                            <div class="item__info-value value-back">
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Длина:
                            </div>
                            <div class="item__info-value value-length">
                            </div>
                        </div>
                        <div class="item__info-item">
                            <div class="item__info-parameter">
                                Цена:
                            </div>
                            <div class="item__info-value value-price">
                            </div>
                        </div>
                    </div>
                    <p class="item__description value-description">
                        <?= $row['description'] ?> </p>
                    <div class="item__btn btn form__link">
                        Записаться на примерку
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include '_footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper@6.3.5/swiper-bundle.min.js"></script>
    <script src="js/inputmask.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>