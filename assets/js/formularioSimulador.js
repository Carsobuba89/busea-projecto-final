/***
 * ////// FORMULARIO DE SIMULACAO SCRIPT
 */
let btnOrcamento = document.querySelector(".btn-orcamento");
btnOrcamento.addEventListener("click", () => {
    var provenienciaEncomenda = document.getElementById("proveniencia").value;
    var destinoEncomenda = document.getElementById("distino").value;
    var quantidadeEncomenda = document.getElementById("quantidade").value;
    var valorTipoEscolhido = null;
    var tipoEncomenda = document.getElementById("tipo");
    valorTipoEscolhido = tipoEncomenda.options[tipoEncomenda.selectedIndex].value;
    var cumprimentoEncomenda = document.getElementById("cumprimento").value;
    var larguraEncomenda = document.getElementById("largura").value;
    var alturaEncomenda = document.getElementById("altura").value;
    var pesoEncomenda = document.getElementById("peso").value;
    console.log(provenienciaEncomenda);
    console.log(destinoEncomenda);
    console.log(quantidadeEncomenda);
    console.log(valorTipoEscolhido);
    console.log(cumprimentoEncomenda);
    console.log(larguraEncomenda);
    console.log(alturaEncomenda);
    console.log(pesoEncomenda);
    var campoResultado = document.querySelector(".resultado-simulacao-erro");
    let campoResultadoSucesso = document.querySelector(".resultado-simulacao-sucesso");
    campoResultadoSucesso.innerHTML = "";
    if (provenienciaEncomenda === "" || destinoEncomenda === "" || quantidadeEncomenda === "" ||
        valorTipoEscolhido === "" || cumprimentoEncomenda === "" || larguraEncomenda === "" ||
        alturaEncomenda === "" || pesoEncomenda === "") {
        //const campoResultado = document.querySelector(".resultado-simulacao");
        campoResultado.classList.add("campo-vazio");
    }
    else {
        //const campoResultado = document.querySelector(".resultado-simulacao");
        campoResultado.classList.remove("campo-vazio");
        //console.log("clicked");
        let c = parseFloat(cumprimentoEncomenda);
        let l = parseFloat(larguraEncomenda);
        let a = parseFloat(alturaEncomenda);
        //console.log(c,l,a);
        let pesoCubico = (c * l) * a;
        let resultadoFrete = pesoCubico / 6000;
        let resultadoCusto = resultadoFrete * 16;
        //alert("O Custo do seu frete sera " + resultadoCusto);
        campoResultadoSucesso.innerHTML += "O Custo do seu frete sera " + resultadoCusto.toString() + " Euro";
        campoResultadoSucesso.classList.add("sucesso");
        //console.log(resultadoCusto.toString());
        document.getElementById("proveniencia").value = "";
        document.getElementById("distino").value = "";
        document.getElementById("quantidade").value = "";
        document.getElementById("cumprimento").value = "";
        document.getElementById("largura").value = "";
        document.getElementById("altura").value = "";
        document.getElementById("peso").value = "";
    }
});
