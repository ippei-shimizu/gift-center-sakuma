document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".swiper-container", {
    slidesPerView: 1.3, // 1画面の表示枚数（少し見切れさせるために1.12に設定）
    spaceBetween: 50, // スライド同士の間隔
    centeredSlides: true, // スライドを中央に表示
    speed: 600,
    loop: true, // ループスライド
    autoplay: {
      delay: 5000, // 2.5秒ごとに自動スライド
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      767: {
        slidesPerView: 1.3,
        spaceBetween: 50, // 767px以下の場合、spaceBetweenを5pxに設定
      },
      100: {
        slidesPerView: 1,
        spaceBetween: 5, // 767px以下の場合、spaceBetweenを5pxに設定
      },
    },
  });

  new Swiper(".top-category-contents", {
    slidesPerView: 4, // 1画面の表示枚数
    spaceBetween: 18, // スライド同士の間隔
    speed: 600,
    autoplay: {
      delay: 3500, // 2.5秒ごとに自動スライド
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      767: {
        slidesPerView: 4,
        spaceBetween: 18, // 767px以下の場合、spaceBetweenを5pxに設定
      },
      100: {
        slidesPerView: 2,
        spaceBetween: 4, // 767px以下の場合、spaceBetweenを5pxに設定
      },
    },
  });

  new Swiper(".sp-top-catalog-slider", {
    slidesPerView: 1,
    speed: 600,
    spaceBetween: 20,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
