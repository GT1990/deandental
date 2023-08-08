let prevScrollPos = window.scrollY || window.pageYOffset;

window.addEventListener("scroll", () => {
  const currentScrollPos = window.scrollY || window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    document.querySelector(".header").style.top = "0";
  } else {
    document.querySelector(".header").style.top = "-300px";
  }

  prevScrollPos = currentScrollPos;
});
