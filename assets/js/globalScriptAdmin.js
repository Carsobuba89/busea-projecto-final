//BUTAO DE DETALHES DE DADOS DE REMETENTE
const detalheRemetente = document.querySelector(".detalheRemetente");
const detalhesEndereco = document.getElementById("detailsEndereco");

detalhesEndereco.addEventListener("click", () => {
    detalheRemetente.classList.toggle("detalheRemetenteActive");
});