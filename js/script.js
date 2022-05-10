function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src =
    "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector("body").classList.add("webp");
  } else {
    document.querySelector("body").classList.add("no-webp");
  }
});
let slider = new Swiper(".comments__slider", {
  wrapperClass: "slider__wrapper",
  slideClass: "slider__item",
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});
let popup_nav = new Swiper(".popup__nav-slider", {
  wrapperClass: "slider__wrapper",
  slideClass: "nav__slide",
  slidesPerView: "auto",
  spaceBetween: 30,
  freeMode: true,
});
let popup_main = new Swiper(".popup__main-slider", {
  wrapperClass: "slider__wrapper",
  slideClass: "main__slide",
  slidesPerView: 1,
  spaceBetween: 3,
  navigation: {
    nextEl: ".popup-button-next",
    prevEl: ".popup-button-prev",
  },
  thumbs: {
    swiper: popup_nav,
  },
});

$(document).ready(function () {
  $("#phonenumber").mask("+7 (999) 999-99-99");
  $("#dateTime").mask("2022.05.99 99:99");
});

$(".filter__title").click(function () {
  $(this).parent().toggleClass("active__list");
});
$(document).on("click", ".item, .popup-card__close", function (event) {
  $(".popup-card").toggleClass("popup-card__active");
  $("body").toggleClass("lock");
});

$(".form__link").click(function () {
  $(".popup").addClass("popup__active");
  $("body").addClass("lock");
});
$(".popup__close, .form__close, .form__close-link, .popup-card__close").click(
  function () {
    $(".popup").removeClass("popup__active");
    if (
      $(".popup-card").hasClass("popup-card__active") ||
      $(".popup").hasClass("popup__active")
    ) {
    } else {
      $("body").removeClass("lock");
    }
  }
);
function check() {
  $(".item").show();
  if (
    ($("#title-color-w").css("display") == "none" &&
      $("#title-color-c").css("display") == "none" &&
      $("#title-color-l").css("display") == "none") ||
    ($("#title-color-w").css("display") == "inline" &&
      $("#title-color-c").css("display") == "inline" &&
      $("#title-color-l").css("display") == "inline")
  ) {
  } else {
    if ($("#title-color-w").css("display") == "none") {
      $(".white-item").hide();
    }
    if ($("#title-color-c").css("display") == "none") {
      $(".cream-item").hide();
    }
    if ($("#title-color-l").css("display") == "none") {
      $(".lilac-item").hide();
    }
  }

  if (
    ($("#title-lenght-long").css("display") == "none" &&
      $("#title-lenght-long-sh").css("display") == "none" &&
      $("#title-lenght-short").css("display") == "none") ||
    ($("#title-lenght-long").css("display") == "inline" &&
      $("#title-lenght-long-sh").css("display") == "inline" &&
      $("#title-lenght-short").css("display") == "inline")
  ) {
  } else {
    if ($("#title-lenght-long").css("display") == "none") {
      $(".long-item").hide();
    }
    if ($("#title-lenght-long-sh").css("display") == "none") {
      $(".long-sh-item").hide();
    }
    if ($("#title-lenght-short").css("display") == "none") {
      $(".short-item").hide();
    }
  }

  if (
    ($("#title-silhouette-A").css("display") == "none" &&
      $("#title-silhouette-G").css("display") == "none" &&
      $("#title-silhouette-F").css("display") == "none" &&
      $("#title-silhouette-S").css("display") == "none" &&
      $("#title-silhouette-L").css("display") == "none") ||
    ($("#title-silhouette-A").css("display") == "inline" &&
      $("#title-silhouette-G").css("display") == "inline" &&
      $("#title-silhouette-F").css("display") == "inline" &&
      $("#title-silhouette-S").css("display") == "inline" &&
      $("#title-silhouette-L").css("display") == "inline")
  ) {
  } else {
    if ($("#title-silhouette-A").css("display") == "none") {
      $(".silhouetteA").hide();
    }
    if ($("#title-silhouette-G").css("display") == "none") {
      $(".silhouetteG").hide();
    }
    if ($("#title-silhouette-F").css("display") == "none") {
      $(".silhouetteF").hide();
    }
    if ($("#title-silhouette-S").css("display") == "none") {
      $(".silhouetteS").hide();
    }
    if ($("#title-silhouette-L").css("display") == "none") {
      $(".silhouetteL").hide();
    }
  }
}
function getData(obj_form) {
  // функция для получения данных из формы
  var hData = {};
  $("input", obj_form).each(function () {
    if (this.name && this.name != "") {
      hData[this.name] = this.value;
      console.log("hData: {" + this.name + "} = " + hData[this.name]);
    }
  });
  return hData;
}

function send() {
  var postData = getData(".popup__form");
  $.ajax({
    dataType: "json",
    url: "../telegram/telegram.php",
    method: "POST",
    async: true,
    data: postData,
    success: function (data) {
      $(".popup__form").html(`
                <div class="form__close">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.707031" y="14.1422" width="1" height="19" transform="rotate(-135 0.707031 14.1422)"
                        fill="#3A241C" />
                    <rect y="0.707153" width="1" height="19" transform="rotate(-45 0 0.707153)" fill="#3A241C" />
                </svg>
            </div>
            <h2 class="form__title">
                Выши данные были отправленны.
                Скоро с вами свяжется менеджер для уточнения деталей.
            </h2><a class="form__submit form__close-link" onclick="location.reload()">Вернуться</a>`);
    },
  });
}

$(".price .filter__list-item").click(function () {
  if ($(this).hasClass("active__filter")) {
    $(".filterNonePrice").remove();
    $(".price .filter__list-item").removeClass("active__filter");
    var postData = {
      id: "none",
    };
    var item = "";
    var catalog = $(".catalog__content");
    $.ajax({
      url: "/components/filter.php",
      method: "POST",
      dataType: "json",
      data: postData,
      success: function (data) {
        catalog.html("");
        $.each(data, function (key, value) {
          if (value[7] != null) {
            var priceWithSale =
              `<div class="item__price item__price-past"><span class="past-number">` +
              value[7] +
              `</span> р </div>`;
          } else {
            var priceWithSale = "";
          }
          if (value[2] == "белое") {
            color = "white-item";
          }
          if (value[2] == "кремовое") {
            color = "cream-item";
          }
          if (value[2] == "сиреневое") {
            color = "lilac-item";
          }

          if (value[3] == "А-силует") {
            silhouette = "silhouetteA";
          }
          if (value[3] == "в греческом стиле") {
            silhouette = "silhouetteG";
          }
          if (value[3] == "русалка/рыбка") {
            silhouette = "silhouetteF";
          }
          if (value[3] == "с прямой юбкой") {
            silhouette = "silhouetteS";
          }
          if (value[3] == "с пышной юбкой") {
            silhouette = "silhouetteL";
          }

          if (value[4] == "длинное платье без шлейфа") {
            length = " long-item";
          }
          if (value[4] == "длинное платье со шлейфом") {
            length = " long-sh-item";
          }
          if (value[4] == "короткое платье без шлейфа") {
            length = " short-item";
          }
          item = `<div class="catalog__item item ${color} ${silhouette} ${length}" id="${value[0]}">
                      <div class="item__img">
                          <img src="img/products/${value[9]}" alt="${value[1]}">
                      </div>
                      <h3 class="item__title">${value[1]}</h3>
                      ${priceWithSale}
                      <div class="item__price item__price-current">
                        <span class="current-number">${value[6]}</span> р
                      </div>
                    </div>`;
          catalog.append(item);
        });
        check();
      },
    });
  } else {
    var id = $(this).attr("id");
    $(".price .filter__list-item").removeClass("active__filter");
    $(".filterNonePrice").remove();
    $(this).addClass("active__filter");
    if (id == "price-filter-m-50") {
      $(".catalog__title")
        .append(`<span class='title-filter filterNonePrice'>до 50 000
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
        <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
        <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
    </svg></span>`);
    }
    if (id == "price-filter-m-60") {
      $(".catalog__title")
        .append(`<span class='title-filter filterNonePrice'>до 60 000
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
        <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
        <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
    </svg></span>`);
    }
    if (id == "price-filter-b-60") {
      $(".catalog__title")
        .append(`<span class='title-filter filterNonePrice'>от 60 000
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.5" y="0.5" width="20" height="20" stroke="black" />
        <line x1="3.78226" y1="3.78243" x2="17.2173" y2="17.2175" stroke="black" />
        <line x1="3.78219" y1="17.2175" x2="17.2172" y2="3.78246" stroke="black" />
    </svg></span>`);
    }
    var postData = {
      id: id,
    };
    var item = "";
    var catalog = $(".catalog__content");
    $.ajax({
      url: "/components/filter.php",
      method: "POST",
      dataType: "json",
      data: postData,
      success: function (data) {
        catalog.html("");
        $.each(data, function (key, value) {
          if (value[7] != null) {
            var priceWithSale =
              `<div class="item__price item__price-past"><span class="past-number">` +
              value[7] +
              `</span> р </div>`;
          } else {
            var priceWithSale = "";
          }
          if (value[2] == "белое") {
            color = "white-item";
          }
          if (value[2] == "кремовое") {
            color = "cream-item";
          }
          if (value[2] == "сиреневое") {
            color = "lilac-item";
          }

          if (value[3] == "А-силует") {
            silhouette = "silhouetteA";
          }
          if (value[3] == "в греческом стиле") {
            silhouette = "silhouetteG";
          }
          if (value[3] == "русалка/рыбка") {
            silhouette = "silhouetteF";
          }
          if (value[3] == "с прямой юбкой") {
            silhouette = "silhouetteS";
          }
          if (value[3] == "с пышной юбкой") {
            silhouette = "silhouetteL";
          }

          if (value[4] == "длинное платье без шлейфа") {
            length = " long-item";
          }
          if (value[4] == "длинное платье со шлейфом") {
            length = " long-sh-item";
          }
          if (value[4] == "короткое платье без шлейфа") {
            length = " short-item";
          }

          item = `<div class="catalog__item item ${color} ${silhouette} ${length}" id="${value[0]}">
                    <div class="item__img">
                        <img src="img/products/${value[9]}" alt="${value[1]}">
                    </div>
                    <h3 class="item__title">${value[1]}</h3>
                    ${priceWithSale}
                    <div class="item__price item__price-current">
                      <span class="current-number">${value[6]}</span> р
                    </div>
                  </div>`;
          catalog.append(item);
        });
        check();
      },
    });
  }
});
$(document).on("click", ".catalog__item", function (event) {
  var id = $(this).attr("id");
  var postData = {
    id: id,
  };
  console.log(id);
  var slide = "";
  var slider_nav = $(".popup__nav-slider .slider__wrapper");
  var slider_main = $(".popup__main-slider .slider__wrapper");
  slider_main.html("");
  slider_nav.html("");
  $.ajax({
    url: "/components/show-card.php",
    method: "POST",
    dataType: "json",
    data: postData,
    success: function (data) {
      $(".item__card .item__title").text(data["product"]["name"]);
      $(".value-silhouette").text(data["product"]["silhouette"]);
      $(".value-color").text(data["product"]["color"]);
      $(".value-back").text(data["product"]["back"]);
      $(".value-length").text(data["product"]["length"]);
      $(".value-price").text(data["product"]["price"] + "p");
      $(".value-description").text(data["product"]["description"]);

      $.each(data["imgs"], function (key, value) {
        $.each(value, function (index, value) {
          if (index == "1") {
            slide =
              `<div class="nav__slide"> <img src="img/products/` +
              value +
              `" alt="product"> </div>`;
            slider_nav.append(slide);
          }
          if (index == "1") {
            slide =
              `<div class="main__slide"> <img src="img/products/` +
              value +
              `" alt="product"> </div>`;
            slider_main.append(slide);
          }
        });
      });
      popup_nav.update();
      popup_main.update();
    },
  });
});
$(document).ready(function () {
  $("body").on("click", ".filterNonePrice", function (e) {
    $(".filterNonePrice").remove();
    $(".price .filter__list-item").removeClass("active__filter");
    var postData = {
      id: "none",
    };
    var item = "";
    var catalog = $(".catalog__content");
    $.ajax({
      url: "/components/filter.php",
      method: "POST",
      dataType: "json",
      data: postData,
      success: function (data) {
        catalog.html("");
        $.each(data, function (key, value) {
          if (value[7] != null) {
            var priceWithSale =
              `<div class="item__price item__price-past"><span class="past-number">` +
              value[7] +
              `</span> р </div>`;
          } else {
            var priceWithSale = "";
          }
          if (value[2] == "белое") {
            color = "white-item";
          }
          if (value[2] == "кремовое") {
            color = "cream-item";
          }
          if (value[2] == "сиреневое") {
            color = "lilac-item";
          }

          if (value[3] == "А-силует") {
            silhouette = "silhouetteA";
          }
          if (value[3] == "в греческом стиле") {
            silhouette = "silhouetteG";
          }
          if (value[3] == "русалка/рыбка") {
            silhouette = "silhouetteF";
          }
          if (value[3] == "с прямой юбкой") {
            silhouette = "silhouetteS";
          }
          if (value[3] == "с пышной юбкой") {
            silhouette = "silhouetteL";
          }

          if (value[4] == "длинное платье без шлейфа") {
            length = " long-item";
          }
          if (value[4] == "длинное платье со шлейфом") {
            length = " long-sh-item";
          }
          if (value[4] == "короткое платье без шлейфа") {
            length = " short-item";
          }
          item = `<div class="catalog__item item ${color} ${silhouette} ${length}" id="${value[0]}">
                      <div class="item__img">
                          <img src="img/products/${value[9]}" alt="${value[1]}">
                      </div>
                      <h3 class="item__title">${value[1]}</h3>
                      ${priceWithSale}
                      <div class="item__price item__price-current">
                        <span class="current-number">${value[6]}</span> р
                      </div>
                    </div>`;
          catalog.append(item);
        });
        check();
      },
    });
  });
});

$(".colors-filter .filter__list-item").click(function () {
  var id = $(this).attr("id");

  if (id == "color-filter-w") {
    $(this).toggleClass("active__filter");
    if ($("#title-color-w").css("display") == "none") {
      $("#title-color-w").show();
    } else {
      $("#title-color-w").hide();
    }
  }
  if (id == "color-filter-c") {
    $(this).toggleClass("active__filter");
    if ($("#title-color-c").css("display") == "none") {
      $("#title-color-c").show();
    } else {
      $("#title-color-c").hide();
    }
  }
  if (id == "color-filter-l") {
    $(this).toggleClass("active__filter");
    if ($("#title-color-l").css("display") == "none") {
      $("#title-color-l").show();
    } else {
      $("#title-color-l").hide();
    }
  }
  check();
});

$(".filter-none-color").click(function () {
  $(this).hide();
  var id = $(this).attr("id");
  if (id == "title-color-w") {
    $("#color-filter-w").removeClass("active__filter");
  }
  if (id == "title-color-c") {
    $("#color-filter-c").removeClass("active__filter");
  }
  if (id == "title-color-l") {
    $("#color-filter-l").removeClass("active__filter");
  }
  check();
});

$(".silhouette-filter .filter__list-item").click(function () {
  var id = $(this).attr("id");
  if (id == "sil-filter-a") {
    $(this).toggleClass("active__filter");
    if ($("#title-silhouette-A").css("display") == "none") {
      $("#title-silhouette-A").show();
    } else {
      $("#title-silhouette-A").hide();
    }
  }
  if (id == "sil-filter-s") {
    $(this).toggleClass("active__filter");
    if ($("#title-silhouette-S").css("display") == "none") {
      $("#title-silhouette-S").show();
    } else {
      $("#title-silhouette-S").hide();
    }
  }
  if (id == "sil-filter-l") {
    $(this).toggleClass("active__filter");
    if ($("#title-silhouette-L").css("display") == "none") {
      $("#title-silhouette-L").show();
    } else {
      $("#title-silhouette-L").hide();
    }
  }
  if (id == "sil-filter-f") {
    $(this).toggleClass("active__filter");
    if ($("#title-silhouette-F").css("display") == "none") {
      $("#title-silhouette-F").show();
    } else {
      $("#title-silhouette-F").hide();
    }
  }
  if (id == "sil-filter-g") {
    $(this).toggleClass("active__filter");
    if ($("#title-silhouette-G").css("display") == "none") {
      $("#title-silhouette-G").show();
    } else {
      $("#title-silhouette-G").hide();
    }
  }
  check();
});
$(".filter-none-sil").click(function () {
  $(this).hide();
  var id = $(this).attr("id");
  if (id == "title-silhouette-A") {
    $("#sil-filter-a").removeClass("active__filter");
  }
  if (id == "title-silhouette-G") {
    $("#sil-filter-g").removeClass("active__filter");
  }
  if (id == "title-silhouette-F") {
    $("#sil-filter-f").removeClass("active__filter");
  }
  if (id == "title-silhouette-S") {
    $("#sil-filter-s").removeClass("active__filter");
  }
  if (id == "title-silhouette-L") {
    $("#sil-filter-l").removeClass("active__filter");
  }
  check();
});

$(".lenght-filter .filter__list-item").click(function () {
  var id = $(this).attr("id");

  if (id == "length-filter-long") {
    $(this).toggleClass("active__filter");
    if ($("#title-lenght-long").css("display") == "none") {
      $("#title-lenght-long").show();
    } else {
      $("#title-lenght-long").hide();
    }
  }
  if (id == "length-filter-long-train") {
    $(this).toggleClass("active__filter");
    if ($("#title-lenght-long-sh").css("display") == "none") {
      $("#title-lenght-long-sh").show();
    } else {
      $("#title-lenght-long-sh").hide();
    }
  }
  if (id == "length-filter-short") {
    $(this).toggleClass("active__filter");
    if ($("#title-lenght-short").css("display") == "none") {
      $("#title-lenght-short").show();
    } else {
      $("#title-lenght-short").hide();
    }
  }
  check();
});

$(".filter-none-lenght").click(function () {
  $(this).hide();
  var id = $(this).attr("id");

  if (id == "title-lenght-long") {
    $("#length-filter-long").removeClass("active__filter");
  }
  if (id == "title-lenght-long-sh") {
    $("#length-filter-long-train").removeClass("active__filter");
  }
  if (id == "title-lenght-short") {
    $("#length-filter-short").removeClass("active__filter");
  }
  check();
});
