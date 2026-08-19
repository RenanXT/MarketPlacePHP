try {
    console.log('carregou');
const pesquisa = document.querySelector('#searchBar');
const div = document.querySelector('#divPesquisa');

pesquisa.addEventListener("input", () => {
    div.innerHTML = '';
    controller(pesquisa);
});
pesquisa.addEventListener("focus", () => {
    listaPesquisa(div);
});
pesquisa.addEventListener("blur", () => {
    esconderDiv(div);
});


function controller (pesquisa) {

    let valorJs = pesquisa.value;


    if(valorJs.length > 0){

        fetch("app/models/buscarProduto.php?nome=" + valorJs)
        .then(resposta => { console.log(resposta);
         return resposta.json()})
        .then(produtos => {          
            
            const modelo = document.querySelector("#txtModelo");
        
             produtos.forEach(produto => {

                console.log(produto);
                const clone = modelo.content.cloneNode(true);

                clone.querySelector("#txtNome").innerHTML = produto.nome;
                clone.querySelector("#txtPreco").innerHTML = produto.preco;
                clone.querySelector(".card-img").src = produto.caminho_arquivo;
                div.appendChild(clone);

            });
            


        });

    }
}

 
function listaPesquisa (div) {
    setTimeout(() => {
        div.classList.remove('d-none');
        div.classList.add('d-flex');
    },200);
 }

 function esconderDiv(div) {
    setTimeout(() => {
        div.classList.remove('d-flex');
        div.classList.add('d-none');
    }, 200);
 }

} catch (error) {
    console.log('[ERRO] => ', error);
}