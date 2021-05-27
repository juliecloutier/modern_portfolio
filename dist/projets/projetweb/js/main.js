const link_newsletter = document.querySelector(".link_newsletter")
const link_newsletter2 = document.querySelector(".link_newsletter2")
const div_newsletter = document.querySelector(".newsletter")
const close = document.querySelector(".close")


const form = document.forms.mon_form


link_newsletter.addEventListener("click", e =>{
    e.preventDefault()
    console.log("test")
    div_newsletter.style.display = "block";
})
link_newsletter2.addEventListener("click", e =>{
    e.preventDefault()
    console.log("test")
    div_newsletter.style.display = "block";
})

close.addEventListener("click", e =>{
    e.preventDefault()
    console.log("close")
    div_newsletter.style.display = "none";
})


form.addEventListener("submit", e => {
    e.preventDefault()

    const nom = form.nom.value
    const courriel = form.courriel.value

    form.remove()

    const div = document.createElement("div")
    div.textContent = `Merci ${nom} !`
    div.classList.add("resultat")
    div_newsletter.appendChild(div)
})






