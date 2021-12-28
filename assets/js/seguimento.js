var btnSeguir = document.querySelector(".btn-seguir");
btnSeguir.addEventListener("click", () => {
    var campoReferencia = document.querySelector(".num-referencia").value;
    if (campoReferencia === "") {
        document.querySelector(".ref-errado").classList.add("mostrar");
        document.querySelector(".form-reponse").classList.remove("resultadoPesquisa");
    }
    else if (campoReferencia === "AW2341") {
        document.querySelector(".form-reponse").classList.add("resultadoPesquisa");
        document.querySelector(".ref-errado").classList.remove("mostrar");
        document.querySelector(".ref-errado-1").classList.remove("mostrar-1");
        //console.log("ok")
    }
    else {
        document.querySelector(".ref-errado-1").classList.add("mostrar-1");
        document.querySelector(".form-reponse").classList.remove("resultadoPesquisa");
    }
});
