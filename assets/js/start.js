window.addEventListener("DOMContentLoaded", function () {
  const iconSearch = document.getElementById("s");
  const iconClose = document.querySelector("span.close");
  const boxSearch = document.querySelector(".search");
  //   const iconPluss = document.querySelectorAll(".name-step-item i");

  iconSearch.addEventListener("click", function (e) {
    if (!boxSearch.classList.contains(".show-s") && e.target.matches("#s")) {
      boxSearch.classList.add("show-s");
      e.target.style.display = "none";
      iconClose.style.display = "flex";
      iconClose.addEventListener("click", function (e) {
        if (e.target.matches(".close")) {
          boxSearch.classList.remove("show-s");
          e.target.style.display = "none";
          iconSearch.style.display = "flex";
        }
      });
    }
  });
});
