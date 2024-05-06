"use strict";
var dlcurrentTheme = localStorage.getItem("theme-dashboard-wellko");
if (dlcurrentTheme == "dark") {
    //document.body.classList.toggle("dark-dashboard");
    dliconchange();
}

function dliconchange() {
  window.addEventListener("DOMContentLoaded", () => {
    document.getElementById("darki").classList.toggle("bxs-bulb");
  });
}

function dashboarddark() {
  document.body.classList.toggle("dark-dashboard");
  document.getElementById("darki").classList.toggle("bxs-bulb");
  var dbtheme = document.body.classList.contains("dark-dashboard") ? "dark" : "light";
  localStorage.setItem("theme-dashboard-wellko", dbtheme);
}
