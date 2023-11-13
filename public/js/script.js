const botaoMenu = document.querySelector('.menu_hamburguer');
const menu = document.querySelector('.menu');

let currentRoute = window.location.pathname;


console.log(currentRoute);

if (currentRoute === "/leobarbosatattoo/blog") {
    // Encontre o elemento com a classe "first_background"
    let element = document.querySelector(".first_background");
    
    if (element) {
      // Adicione a classe "blog_background" ao elemento
      element.classList.add("blog_background");
      
      // Remova a classe "first_background" do mesmo elemento
      element.classList.remove("first_background");
    }
  }

  if (currentRoute === "/leobarbosatattoo/portfolio") {
    // Encontre o elemento com a classe "first_background"
    let element = document.querySelector(".first_background");
    
    if (element) {
      // Adicione a classe "blog_background" ao elemento
      element.classList.add("portfolio_background");
      
      // Remova a classe "first_background" do mesmo elemento
      element.classList.remove("first_background");
    }
  }


  if (currentRoute === "/leobarbosatattoo/blog/post") {
    // Encontre o elemento com a classe "first_background"
    let element = document.querySelector(".first_background");
    
    if (element) {
      // Adicione a classe "blog_background" ao elemento
      element.classList.add("post_background");
      
      // Remova a classe "first_background" do mesmo elemento
      element.classList.remove("first_background");
    }
  }

 


botaoMenu.addEventListener('click', function(event) {
    event.preventDefault();
    menu.classList.toggle("menu-aberto");

    if (menu.classList.contains('menu-aberto')) {
        const spans = botaoMenu.querySelectorAll('span');
        for (let i = 0; i < spans.length; i++) {
            if(i == 0) {
                spans[i].id = "span-menuOne";
            } else if(i == 1) {
                spans[i].id = "span-menuTwo";
            } else if(i == 2) {
                spans[i].id = "span-menuThree";
            }
        }
    } else {
        const spans = botaoMenu.querySelectorAll('span');
        for (let i = 0; i < spans.length; i++) {
            spans[i].removeAttribute('id');
        }
    }
});



document.addEventListener('DOMContentLoaded', function() {
    const wordElement = document.querySelector('.dynamicWord');
    const words = ['Preto e Cinza', 'Animes & Geek', 'Escrita', 'Realismo', 'Old School']; // Adicione as palavras desejadas

    let currentIndex = 0;

    function changeWord() {
        wordElement.style.opacity = 0;
        setTimeout(function() {
            currentIndex = (currentIndex + 1) % words.length;
            wordElement.textContent = words[currentIndex];
            wordElement.style.opacity = 1;
        }, 500);
    }

    setInterval(changeWord, 2000);
});













