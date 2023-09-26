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
    loop: true,
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

  document
    .getElementById("pageTop")
    .addEventListener("click", function (event) {
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
      });
    });

  const titles = document.querySelectorAll(
    ".nav-list-title.nav-list-title-acoodion"
  );

  titles.forEach(function (title) {
    title.addEventListener("click", function () {
      // 767px以下の場合のみアコーディオンの動作を有効にする
      if (window.innerWidth <= 767) {
        // クリックされたタイトルの次の要素（.nav-list-item-wrap）の高さを取得
        const targetElement = this.nextElementSibling;
        const targetHeight = targetElement.scrollHeight;
        // 現在の高さを取得
        const currentHeight = targetElement.offsetHeight;

        // アコーディオンの状態を切り替える
        if (currentHeight > 0) {
          targetElement.style.height = "0px";
        } else {
          targetElement.style.height = `${targetHeight}px`;
        }
      }
    });
  });

  // GSAPとScrollTriggerのプラグインをアクティベート
  gsap.registerPlugin(ScrollTrigger);

  // fadeUpText要素を選択
  let fadeUpTextElements = document.querySelectorAll(".fadeUpText");

  // 各要素に対してアニメーションを設定
  fadeUpTextElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        translateY: "10px",
        scale: 0.99,
        opacity: 0,
      },
      {
        translateY: "0",
        scale: 1,
        opacity: 1,
        duration: 0.6,
        ease: "cubic-bezier(.645,.045,.355,1)",
        scrollTrigger: {
          trigger: element,
          start: "top 80%", // この値を調整して、要素が画面に入ったタイミングを変更
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  // animationBorder要素を選択
  let animationBorderElements = document.querySelectorAll(".animationBorder");
  let animationBorderElements02 = document.querySelectorAll(
    ".animationBorder-02"
  );

  // 各要素に対してアニメーションを設定
  animationBorderElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        width: "0%",
      },
      {
        width: "100%",
        duration: 1, // ここでは1秒としていますが、任意の時間に調整可能
        ease: "power2.out",
        scrollTrigger: {
          trigger: element,
          start: "top 80%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  animationBorderElements02.forEach((element) => {
    gsap.fromTo(
      element,
      {
        width: "0%",
      },
      {
        width: "100%",
        duration: 2, // ここでは1秒としていますが、任意の時間に調整可能
        delay: 0.4,
        ease: "power2.out",
        scrollTrigger: {
          trigger: element,
          start: "top 80%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  let fadeInImgElements = document.querySelectorAll(".fadeInImg");

  // 各要素に対してアニメーションを設定
  fadeInImgElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        opacity: 0,
      },
      {
        opacity: 1,
        duration: 1.6,
        delay: 0.4,
        ease: "cubic-bezier(.645,.045,.355,1)",
        scrollTrigger: {
          trigger: element,
          start: "top 70%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });
});
