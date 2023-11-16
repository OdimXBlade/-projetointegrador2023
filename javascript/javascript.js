// Selecionar todos os elementos <h2> da página
var h2List = document.querySelectorAll("h2");

// Adicionar um evento de mousemove a cada elemento <h2>
h2List.forEach(function(h2) {
  h2.addEventListener("mousemove", function() {
    h2.style.transform = "scale(1.05)";
  });
  
  // Adicionar um evento de mouseleave para redefinir a escala
  h2.addEventListener("mouseleave", function() {
    h2.style.transform = "scale(1)";
  });
});
