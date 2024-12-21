// Toggle Light/Dark Mode
const toggleButton = document.getElementById("toggle-mode");
const body = document.body;

toggleButton.addEventListener("click", () => {
    body.classList.toggle("dark-mode");
    body.classList.toggle("light-mode");

    if (body.classList.contains("dark-mode")) {
        toggleButton.innerHTML = '<i class="fas fa-sun"> Claro</i>'; // Ícono de sol
    } else {
        toggleButton.innerHTML = '<i class="fas fa-moon"> Oscuro</i>'; // Ícono de luna
    }
});

// Mostrar y ocultar popup
function showPopup() {
    document.getElementById("profilePopup").style.display = "block";
}

function hidePopup() {
    document.getElementById("profilePopup").style.display = "none";
}

const profileIcon = document.querySelector('#profileMenu img');
profileIcon.addEventListener('mouseover', showPopup);
document.getElementById('profilePopup').addEventListener('mouseout', hidePopup);
