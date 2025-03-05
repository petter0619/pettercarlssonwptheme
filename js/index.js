const navbar = document.querySelector("#nav")
const navBtn = document.querySelector("#nav-btn")
const closeBtn = document.querySelector("#close-btn")
const sidebar = document.querySelector("#sidebar")
const date = document.querySelector("#date")
const sidebarLinks = sidebar.querySelectorAll("a")

// add fixed class to navbar
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 30) {
    navbar.classList.add("navbar-fixed")
  } else {
    navbar.classList.remove("navbar-fixed")
  }
})
// show sidebar
navBtn.addEventListener("click", function () {
  sidebar.classList.add("show-sidebar")
})
closeBtn.addEventListener("click", function () {
  sidebar.classList.remove("show-sidebar")
})
// close sidebar on navigation click
sidebarLinks.forEach((link) =>
  link.addEventListener("click", () => {
    sidebar.classList.remove("show-sidebar")
  })
)
// set year
date.innerHTML = new Date().getFullYear()
