/*------ Javascript - Renaud Van Meerbergen ------*/
document.documentElement.classList.add("js-enabled");
const body = document.querySelector('body');

/* Card Effect */
function mouseCardEffect(e) {
    const cards = document.getElementsByClassName("card");

    for (const card of cards) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        card.style.setProperty("--mouse-x", `${x}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
    }
}

document.getElementById("cards").addEventListener("mousemove", mouseCardEffect);