function openModal() {
    document.getElementById("modal").style.top = "-20px";
    document.getElementById("modal").style.boxShadow="0 331px 0px 0px rgba(43, 53, 65, 0.4)";
}
function closeModal() {
    document.getElementById("modal").style.top = "-400px";
    document.getElementById("modal").style.boxShadow="unset";
}
const links = document.querySelectorAll("a");
for (const link of links) {
  link.addEventListener("click", clickHandler);
}
function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");

  document.querySelector(href).scrollIntoView({
    behavior: "smooth",
  });
}