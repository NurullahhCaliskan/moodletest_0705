"use strict";
document.addEventListener("DOMContentLoaded", () => {
  const checkbox = document.getElementById('dlcheckbox');
  const currentTheme = localStorage.getItem("theme-wellko");
  checkbox.checked = false;
  if (currentTheme == "dark") {
    checkbox.checked = false;
    document.body.classList.toggle("dark-wellko");
  } else {
    checkbox.checked = true; 
  }

  checkbox.addEventListener('change', ()=>{
      document.body.classList.toggle("dark-wellko");
      var theme = document.body.classList.contains("dark-wellko") ? "dark" : "light";
      localStorage.setItem("theme-wellko", theme);
  });
});