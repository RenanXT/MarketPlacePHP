<?php include_once __DIR__ . '/../layouts/html_header.php';
include_once __DIR__ . '/../layouts/BarraNav.php';
?>
<div class="d-flex overflow-auto">
    <nav th:replace="fragments/navbar :: navbar"></nav>
    <div id="Content" class="d-flex flex-row flex-wrap w-100 p-2 overflow-auto">
        <!-- Barra de pesquisa -->
        <div class="container-fluid mb-4">

            <div
                class="position-relative d-flex bg-content gap-2 align-items-center justify-content-between p-2 m-2 shadow rounded-5 w-100">
                <form method="POST" action="" class="d-flex w-90 m-auto">

                    <i class="fa-solid fa-magnifying-glass text-white fs-3 p-2"></i>

                    <input id="searchBar" class="form-control w-90 border-0 bg-transparent h-100 m-auto text-white"
                        placeholder="Pesquisar produtos...">
                    <span>
                    </span>

                </form>
                <a href="index.php?pagina=perfil">
                    <button class="btn" name="btnUsuarioPerfil">
                        <i class="fa-solid fa-circle-user fw-bold fs-3 m-1 text-white"></i>
                    </button>
                </a>

            </div>
            <div id="divPesquisa"
                class="position-absolute d-none flex-wrap bg-content rounded-2 border border-secondary p-2 h-75"
                style=" z-index: 1; width: 80%;"></div>
            <template id="txtModelo" class="d-flex justify-content-start align-items-start flex-wrap w-100 p-1">
                <div class="card-produto bg-content glow-hover text-white p-2">
                    <button class="d-flex flex-column btn text-white" type="submit" name="btnProdutoPesquisa">
                        <img class="card-img" src="public/img/S-by-Solar-AB4.6C.jpg" alt="Mouse Gamer">

                        <span class="text-center w-100 h-50">
                            <p id="txtNome"></p>
                            <p id="txtPreco"></p>
                        </span>
                    </button>

                </div>
            </template>

            <!-- Banner principal -->

            <div class="row">

                <div class="col-9">

                    <img id="imgBanner" class="w-100 h-100 p-2" src="public/img/banners/paint.png" alt="Banner">

                </div>


                <!-- Perfil -->

                <div class="col-3 mt-3">

                    <div class="d-flex flex-column border border-dark w-100 glow-hover">

                        <img class="w-100 h-60 p-1" src="public/img/wallpaper-dark.jpg" alt="Banner do usuário">

                        <div class="d-flex flex-column w-100 h-40 content-center p-3 bg-DarkGray">

                            <i class="fa-solid fa-circle-user fs-1 text-white"></i>

                            <h2 class="text-start text-white">
                                <?php echo $NomeSocial; ?>
                            </h2>

                            <h5 class="text-start text-secondary mb-4">
                                #001
                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="d-flex m-auto flex-wrap w-100">

            <h3 class="text-center m-auto text-white fw-bold p-5 m-4 w-75 border-top">
                PRODUTOS EM DESTAQUE
            </h3>

            <button class="btn">
                <p class="w-100 text-end text-white fw-bold m-auto">
                    Ver Mais
                </p>
            </button>


            <div class="d-flex flex-wrap content-center gap-2 w-100 p-1">

                <!-- Produtos em destaque -->

                <div class="d-flex flex-wrap content-center gap-2 w-100 p-1">

                    <div class="card-produto bg-content glow-hover text-white p-2">
                        <img class="card-img" src="public/img/S-by-Solar-AB4.6C.jpg" alt="Mouse Gamer">

                        <span class="text-center w-100 h-50">
                            <p> Guitarra Solar ab4.6c preto fosco</p>
                            <p>R$ 199,90</p>
                        </span>
                    </div>

                    <div class="card-produto bg-content glow-hover text-white p-2">
                        <img class="card-img" src="public/img/Guitarra Les Paul.png" alt="Teclado Mecânico">

                        <span class="text-center w-100 h-50">
                            <p>Guitarra Les Paul</p>
                            <p>R$ 349,90</p>
                        </span>
                    </div>

                    <div class="card-produto bg-content glow-hover text-white p-2">
                        <img class="card-img" src="public/img/fender-telecaster.png" alt="Headset">

                        <span class="text-center w-100 h-50">
                            <p>Guitarra Fender Telecaster</p>
                            <p>R$ 499,90</p>
                        </span>
                    </div>

                    <div class="card-produto bg-content glow-hover text-white p-2">
                        <img class="card-img" src="public/img/notebook.png" alt="Monitor">

                        <span class="text-center w-100 h-50">
                            <p>Notebook </p>
                            <p>R$ 1.299,90</p>
                        </span>
                    </div>

                    <div class="card-produto bg-content glow-hover text-white p-2">
                        <img class="card-img" src="public/img/controle.png" alt="Cadeira Gamer">

                        <span class="text-center w-100 h-50">
                            <p>Controle Gamer Premium</p>
                            <p>R$ 899,90</p>
                        </span>
                    </div>

                    <div class="card-produto bg-content glow-hover text-white p-2">
                        <img class="card-img" src="public/img/placaVideo.png" alt="Placa de Vídeo">

                        <span class="text-center w-100 h-50">
                            <p>RTX 5070 12GB</p>
                            <p>R$ 4.599,90</p>
                        </span>
                    </div>

                </div>

            </div>
        </div>
        <div class="d-flex justify-content-between gap-2 m-auto h-auto" style="z-index:1;">


            <div class="d-flex bg-content rounded-4 border border-dark p-1 text-white">
                <i class="fa-solid fa-star-half fs-1 m-3"></i>
                <span class="d-flex flex-column m-2">
                    <p class="fw-bold">18</p>
                    <p class="fw-bold">Avaliações feitas</p>
                </span>
            </div>
            <div class="d-flex bg-content rounded-4 border border-dark p-1 text-white">
                <i class="fa-solid fa-money-check fs-1 m-3"></i>
                <span class="d-flex flex-column m-2">
                    <p class="fw-bold">5</p>
                    <p class="fw-bold">Compras realizadas</p>
                </span>
            </div>
            <div class="d-flex bg-content rounded-4 border border-dark p-1 text-white">
                <i class="fa-solid fa-heart fs-1 m-3"></i>
                <span class="d-flex flex-column m-2">
                    <p class="fw-bold">45</p>
                    <p class="fw-bold">Marcados como favoritos</p>
                </span>
            </div>

        </div>
        <div class="container-fluid w-100 mt-5">
            <div class="row bg-content border border-dark">
                <div class="col-5 overflow-hidden">
                    <div class="w-75 overflow-hidden" style="transform: rotate(20deg);">
                        <img src="public/img/Perifricos_gamer.jpg" alt="">
                    </div>
                </div>
                <div class="col-7">
                    <div class="d-flex flex-column content-center gap-2 p-3 w-100 h-100">
                        <h1 class="text-silver fw-bold text-start w-100 m-2">CADASTRE SUA LOJA NO SITE</h1>
                        <h2 class="text-silver fw-bold text-start w-100 m-2">ADICIONE SEUS PRODUTOS NO NOSSO CATALOGO E
                            EXPANDA SUAS VENDAS </h2>
                        <div id="logoLoop" class="d-flex gap-2 w-100 m-4 overflow-hidden">
                            <img src="public/img/logoLojas.png" alt="">
                            <img src="public/img/logoLojas.png" alt="">
                            <img src="public/img/logoLojas.png" alt="">
                            <img src="public/img/logoLojas.png" alt="">
                            <img src="public/img/logoLojas.png" alt="">
                            <img src="public/img/logoLojas.png" alt="">
                        </div>
                        <h4 class="text-silver text-start w-100 m-2">Crie sua conta e descrubra as vantagens</h4>
                        <div class="d-flex flex-row flex-wrap gap-2 w-100">
                            <button
                                class="btn bg-DarkGray border-dark text-white fw-bold glow-hover m-2 p-2 rounded-3 w-25 h-auto">
                                ENTRAR
                            </button>
                            <button
                                class="btn bg-DarkGray border-dark text-white fw-bold glow-hover m-2 p-2 rounded-3 w-25 h-auto">
                                CRIAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/MarketPlacePHP/public/js/produtos-consulta.js"></script>
<script src="/MarketPlacePHP/public/js/bannerJs.js"></script>

</body>

</html>