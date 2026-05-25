// Controle do Header e Footer no Scroll
let lastScrollTop = 0;
const header = document.getElementById("header");
const footer = document.getElementById("footer");

window.addEventListener("scroll", function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let windowHeight = window.innerHeight;
    let docHeight = document.documentElement.scrollHeight;

    // 1. Lógica do Header
    if (scrollTop > lastScrollTop) {
        header.classList.add("hidden"); // Rolando para baixo -> esconde
    } else {
        header.classList.remove("hidden"); // Rolando para cima -> mostra
    }

    // 2. Lógica do Footer (Apenas perto do fim da página: ex: 100px de tolerância)
    let pertoDoFim = (scrollTop + windowHeight) >= (docHeight - 100);

    if (scrollTop > lastScrollTop && pertoDoFim) {
        footer.classList.remove("hidden"); // Rolando para baixo no fim -> mostra
    } else {
        footer.classList.add("hidden"); // Qualquer outra situação -> esconde
    }
    
    // Atualiza a posição do último scroll (Apenas uma vez no final)
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
});

// Toggle das seções (Mantido igual)
const sections = document.querySelectorAll("section h2");
sections.forEach(titulo => {
    titulo.addEventListener("click", () => {
        const content = titulo.nextElementSibling;
        content.classList.toggle("show");
    });
});

// Abrir a seção automaticamente ao clicar nos links do Header
const menuLinks = document.querySelectorAll("nav a");

menuLinks.forEach(link => {
    link.addEventListener("click", (event) => {
        // 1. Evita o pulo abrupto padrão do HTML
        event.preventDefault(); 
        
        // 2. Pega o ID da seção alvo (ex: "#inicio", "#sobre")
        const targetId = link.getAttribute("href");
        const targetSection = document.querySelector(targetId);
        
        if (targetSection) {
            // 3. Encontra a div de conteúdo dentro dessa seção
            const content = targetSection.querySelector(".content");
            
            if (content) {
                // 4. Força a seção a se abrir
                content.classList.add("show");
            }
            
            // 5. Faz a rolagem suave até a seção agora que ela está visível
            // O desconto de 80px serve para não cobrir o título com o header fixo
            const topPosition = targetSection.offsetTop - 80;
            
            window.scrollTo({
                top: topPosition,
                behavior: "smooth"
            });
        }
    });
});