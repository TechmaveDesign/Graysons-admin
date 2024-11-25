"use strict";

/*Dropdown Extend Init*/
window.addEventListener("show.bs.dropdown", function (e) {
  if (!e.target.hasAttribute("data-dropdown-animation")) return;
  var i = e.target.nextElementSibling;
  i.style.opacity = 0, setTimeout(function () {
    i.style.transform = i.style.transform + " translateY(10px)";
  }), setTimeout(function () {
    i.style.transform = i.style.transform + " translateY(-10px)", i.style.transition = "transform 300ms, opacity 300ms", i.style.opacity = 1;
  }, 100);
}), window.addEventListener("hide.bs.dropdown", function (e) {
  if (!e.target.hasAttribute("data-dropdown-animation")) return;
  var i = e.target.nextElementSibling;
  setTimeout(function () {
    i.style.removeProperty("transform"), i.style.removeProperty("transition");
  });
});