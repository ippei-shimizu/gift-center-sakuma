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

  let fadeUpTextHowElements = document.querySelectorAll(".fadeUpText-how");

  // 各要素に対してアニメーションを設定
  fadeUpTextHowElements.forEach((element) => {
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
        delay: 0.8,
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
  let animationBorderHowElements = document.querySelectorAll(
    ".animationBorderHow"
  );
  let animationBorderCompanyElements = document.querySelectorAll(
    ".animationBorderCompany"
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

  animationBorderHowElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        width: "0%",
      },
      {
        width: "100%",
        duration: 2, // ここでは1秒としていますが、任意の時間に調整可能
        delay: 0.8,
        ease: "power2.out",
        scrollTrigger: {
          trigger: element,
          start: "top 80%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  animationBorderCompanyElements.forEach((element) => {
    const targetWidth = window.innerWidth <= 767 ? "172%" : "112%";

    gsap.fromTo(
      element,
      {
        width: "0%",
      },
      {
        width: targetWidth,
        duration: 2,
        delay: 0.8,
        ease: "power2.out",
        scrollTrigger: {
          trigger: element,
          start: "top 80%",
          once: true,
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

  let fadeInImgFvElements = document.querySelectorAll(".fadeInImgFv");
  // 各要素に対してアニメーションを設定
  fadeInImgFvElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        opacity: 0,
      },
      {
        opacity: 1,
        duration: 1,
        ease: "cubic-bezier(.645,.045,.355,1)",
        scrollTrigger: {
          trigger: element,
          start: "top 100%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  let firstFadeElements = document.querySelectorAll(".firstFadeUp");
  // 各要素に対してアニメーションを設定
  firstFadeElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        opacity: 0,
      },
      {
        opacity: 1,
        duration: 1,
        ease: "cubic-bezier(.645,.045,.355,1)",
        scrollTrigger: {
          trigger: element,
          start: "top 100%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  let secondeFadeElements = document.querySelectorAll(".secondFadeUp");
  // 各要素に対してアニメーションを設定
  secondeFadeElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        opacity: 0,
      },
      {
        opacity: 1,
        delay: 0.4,
        duration: 1,
        ease: "cubic-bezier(.645,.045,.355,1)",
        scrollTrigger: {
          trigger: element,
          start: "top 100%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  let thirdFadeElements = document.querySelectorAll(".thirdFadeUp");
  thirdFadeElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        width: "100%",
      },
      {
        width: "0%",
        duration: 2, // ここでは1秒としていますが、任意の時間に調整可能
        delay: 0.6,
        ease: "power2.out",
        scrollTrigger: {
          trigger: element,
          start: "top 80%",
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  let fourFadeElements = document.querySelectorAll(".fourFadeUp");
  fourFadeElements.forEach((element) => {
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
        duration: 1,
        delay: 1,
        ease: "cubic-bezier(.645,.045,.355,1)",
        scrollTrigger: {
          trigger: element,
          start: "top 80%", // この値を調整して、要素が画面に入ったタイミングを変更
          once: true, // アニメーションは一度だけ発火
        },
      }
    );
  });

  let howFvItemElements = document.querySelectorAll(".how-fv-item");

  // 各要素に対してアニメーションを設定
  howFvItemElements.forEach((element) => {
    gsap.to(element, {
      duration: 0.01, // このアクションはクラスを付与するだけなので、実質的にアニメーション時間は不要です。このため、極端に短い時間を設定しています。
      onComplete: function () {
        element.classList.add("animationSquareBg");
      },
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
        once: true, // アニメーションは一度だけ発火
      },
    });
  });

  let howFvSquareElements = document.querySelectorAll(".how-fv-square ");

  // 各要素に対してアニメーションを設定
  howFvSquareElements.forEach((element) => {
    gsap.to(element, {
      duration: 0.01, // このアクションはクラスを付与するだけなので、実質的にアニメーション時間は不要です。このため、極端に短い時間を設定しています。
      onComplete: function () {
        element.classList.add("animationSquareBg");
      },
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
        once: true, // アニメーションは一度だけ発火
      },
    });
  });

  if (window.location.hash) {
    // フラグメント識別子を取得
    var hash = window.location.hash;

    // `/`を取り除く
    var sanitizedHash = hash.replace("/", "");

    var targetElement = document.querySelector(sanitizedHash);

    if (targetElement) {
      // 現在のスクロール位置
      var start = window.pageYOffset;

      // ターゲットの位置
      var end = targetElement.getBoundingClientRect().top + start;

      // ここでオフセットを調整。例としてヘッダーの高さが50pxだとする
      var headerOffset = 200;
      end = end - headerOffset;

      // アニメーションの時間
      var duration = 1000;

      var startTime = performance.now();

      requestAnimationFrame(function step(timestamp) {
        var time = timestamp - startTime;
        var progress = time / duration;
        if (progress > 1) progress = 1;

        window.scrollTo(0, start + (end - start) * progress);

        if (progress < 1) requestAnimationFrame(step);
      });
    }
  }

  const links = document.querySelectorAll(".page-in-link");
  links.forEach(function (link) {
    link.addEventListener("click", function (event) {
      window.scrollTo({
        top: 400,
        left: 0,
        behavior: "smooth",
      });
    });
  });

  const navLinks = document.querySelectorAll(".hamburger-nav-link");

  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      if (navMenu.classList.contains("is-open")) {
        navMenu.classList.remove("is-open");
        overlay.classList.remove("is-open");
        navBtn.classList.remove("openRotate");
        navText.textContent = "MENU";
      }
    });
  });
});
