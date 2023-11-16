// Selecionar todos os elementos <h2> da página
var h2List = document.querySelectorAll("h2");

// Adicionar um evento de mousemove a cada elemento <h2>
h2List.forEach(function(h2) {
  h2.addEventListener("mousemove", function() {
    h2.style.transform = "scale(1.2)";
  });
  
  // Adicionar um evento de mouseleave para redefinir a escala
  h2.addEventListener("mouseleave", function() {
    h2.style.transform = "scale(1)";
  });
});

// SEPARANDO TEXTO EM LINHAS QUEBRADAS COM JS
const h2 = document.getElementById('textoQuebra');
const splittedName = h2.split(',')
console.log(splittedName)
