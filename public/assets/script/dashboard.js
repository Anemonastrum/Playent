document.getElementById("sidebar").style.height = "100vh";
const toggleBtn = document.getElementById("toggle-btn");
const sidebar = document.getElementById("sidebar");
const content = document.getElementById("content");

toggleBtn.addEventListener("click", () => {
  sidebar.classList.toggle("collapsed");
  content.classList.toggle("expanded");
});


