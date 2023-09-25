document.addEventListener("DOMContentLoaded", function () {
  const navBtn = document.getElementById("navBtn");
  const navMenu = document.getElementById("navMenu");
  const overlay = document.getElementById("overlay");
  const navText = document.querySelector(".nav-text");

  navBtn.addEventListener("click", function () {
    if (navMenu.classList.contains("is-open")) {
      navMenu.classList.remove("is-open");
      overlay.classList.remove("is-open");
      navBtn.classList.remove("openRotate");
      navText.textContent = "MENU";
    } else {
      navMenu.classList.add("is-open");
      overlay.classList.add("is-open");
      navBtn.classList.add("openRotate");
      navText.textContent = "CLOSE";
    }
  });

  overlay.addEventListener("click", function () {
    navMenu.classList.remove("is-open");
    overlay.classList.remove("is-open");
    navText.textContent = "MENU";
  });

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
  });

  new Swiper(".top-category-contents", {
    slidesPerView: 4, // 1画面の表示枚数
    slidesPerGroup: 1,
    spaceBetween: 18, // スライド同士の間隔
    speed: 600,
    loop: true, // ループスライド
    autoplay: {
      delay: 3500, // 2.5秒ごとに自動スライド
      disableOnInteraction: false, // ユーザーがスライドを操作した後もautoplayを続ける
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
