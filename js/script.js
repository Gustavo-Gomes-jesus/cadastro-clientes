document.addEventListener("DOMContentLoaded", function () {
  const linksExcluir = document.querySelectorAll(".btn-excluir");

  linksExcluir.forEach(function (link) {
    link.addEventListener("click", function (event) {
      const confirmar = confirm("Tem certeza que deseja excluir este cliente?");
      if (!confirmar) {
        event.preventDefault();
      }
    });
  });
});
