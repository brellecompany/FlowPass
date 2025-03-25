import './bootstrap';
document.addEventListener("DOMContentLoaded", function() {
    // Botão de contato
    const contactButton = document.getElementById("contact-btn");
    if (contactButton) {
        contactButton.addEventListener("click", function() {
            alert("Entraremos em contato em breve!");
        });
    }

    // Adicionando efeito hover no menu
    const menuLinks = document.querySelectorAll("nav ul li a");
    menuLinks.forEach(link => {
        link.addEventListener("mouseover", function() {
            this.style.color = "#0056b3";
        });
        link.addEventListener("mouseout", function() {
            this.style.color = "#007bff";
        });
    });

    // Animação ao rolar a página para a seção desejada
    document.querySelectorAll("nav ul li a").forEach(anchor => {
        anchor.addEventListener("click", function(event) {
            event.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 50,
                    behavior: "smooth"
                });
            }
        });
    });
});
