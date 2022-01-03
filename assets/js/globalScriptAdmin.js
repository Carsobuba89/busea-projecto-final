//BUTAO DE DETALHES DE DADOS DE REMETENTE
const detalheRemetente = document.querySelector(".detalheRemetente");
const detalhesEndereco = document.getElementById("detailsEndereco");
//BUTAO DE DETALHES DE DADOS DE destinatario
const detalheDestinobtn = document.getElementById("detailsEnderecoDestino");
const detalheDestinodiv = document.querySelector(".detalheDestino");

detalhesEndereco.addEventListener("click", () => {
    detalheRemetente.classList.toggle("detalheActive");
});

detalheDestinobtn.addEventListener("click", () => {
    detalheDestinodiv.classList.toggle("detalheActive");
});