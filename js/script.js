function openForm() {
   const formWrapp = document.querySelector(".form__wrapp");
   let btns = document.querySelectorAll(".card__btn");
   btns.forEach(btn => {
      btn.addEventListener("click", e => {
         let productTitle = e.target.parentNode.querySelector(".card__title").textContent;
         let ptoductNameInp = document.querySelector("#title")
         ptoductNameInp.value = productTitle
         formWrapp.classList.add("form__visible")
      })
   })
   document.addEventListener("click", e => {
      if (e.target.classList.contains("form__wrapp")) {
         formWrapp.classList.remove("form__visible")
      }
   })
}

document.addEventListener('DOMContentLoaded', () => {
   openForm()
})