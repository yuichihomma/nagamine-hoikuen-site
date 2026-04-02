// JSを全体に効かせる
document.addEventListener("DOMContentLoaded", function () {
  console.log("main.js 読み込み成功");

  // =====================================
  // 欠席・遅刻フォーム
  // 「遅刻」のときだけ登園予定時刻を表示する
  // =====================================
  const contactType = document.querySelector('[name="contact-type"]');
  const arrivalTimeField = document.querySelector('[name="arrival-time"]');

  // どちらかが存在しないページでは何もしない
  if (contactType && arrivalTimeField) {
    const arrivalWrapper = arrivalTimeField.closest("label");

    function toggleArrivalTime() {
      if (contactType.value === "遅刻") {
        arrivalWrapper.style.display = "block";
      } else {
        arrivalWrapper.style.display = "none";
      }
    }

    toggleArrivalTime();
    contactType.addEventListener("change", toggleArrivalTime);
  }

  // =====================================
  // ヒーロースライダー
  // =====================================
  const slides = document.querySelectorAll(".hero-slider .slide");

  // スライドが2枚以上あるときだけ動かす
  if (slides.length > 1) {
    let currentIndex = 0;

    setInterval(function () {
      // 今の画像を消す
      slides[currentIndex].classList.remove("active");

      // 次の画像へ
      currentIndex++;

      // 最後まで行ったら最初に戻る
      if (currentIndex >= slides.length) {
        currentIndex = 0;
      }

      // 次の画像を表示
      slides[currentIndex].classList.add("active");
    }, 4000);
  }

  // =======================================
  // fade-in
  // =======================================
  const targets = document.querySelectorAll(".fade-in");

  function checkFadeIn() {
    targets.forEach(function (el) {
      const rect = el.getBoundingClientRect();

      if (rect.top < window.innerHeight - 50) {
        el.classList.add("active");
      }
    });
  }

  // ページ開いた時も
  checkFadeIn();

  // スクロール時も
  window.addEventListener("scroll", checkFadeIn);

  // =======================================
  // スマホ版のメニュー開閉
  // =======================================
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  const globalNav = document.getElementById("globalNav");

  if (hamburgerBtn && globalNav) {
    hamburgerBtn.addEventListener("click", function () {
      globalNav.classList.toggle("open");
      hamburgerBtn.classList.toggle("active");
    });
  }
});
