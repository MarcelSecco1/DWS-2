<?php
session_start();
require("logica-aut.php");
require "cabecalho.php";



if (autenticado()) {
?>
<!-- Header-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- 700x700-->
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/inicio01.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Nossas ferramentas:</h2>
                        <p class="fs-5">O Mezun conta com diversas empresas e infinitas possibilidades de emprego, conseguindo assim, atingir todas as regiões do país e toda população brasileira de forma acessível e prática.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 1-->

    <div class="corfundo">
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <!-- 700x700-->
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/inicio02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Encontre seu emprego ideal: </h2>
                            <p class="fs-5">Conheça nossas empresas cadastradas e envie seu currículo para a vaga desejada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- 700x700-->
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/inicio03.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Conheça suas oportunidades profissionais:</h2>
                            <p class="fs-5">O Mezun conta com uma infinidade em empresas, possibilitando ao usuário maior diversidade em opções profissionais.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
} else {
    if (isset($_SESSION["restrito"]) && $_SESSION["restrito"]) {
        ?>
            <br>
            <div class="alert alert-danger" role="alert">
                <h4> Você precisa está logado para ter acesso. </h4>
        
            </div>
        
        <?php
            unset($_SESSION["restrito"]);
        }
?>
    <header class="py-5 bg-white">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-lg-start">
                        <h1 class="display-5 fw-bolder text-black mb-2">
                            Mezun - Currículos
                        </h1>
                        <p class="lead fw-normal text-black-50 mb-4">
                            Projeto Integrador - Web Site, Sistema Gerenciador de Currículos.
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btnPrincipal comHover btn-lg px-4 me-sm-3 text-white" href="formLogin.php"> Veja o nosso projeto</a>
                            <a class="btn btn-outline-dark btn-lg px-4" href="#scroll">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-7 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5" src="assets\img\Mezun.jpg" alt="..." />
                </div>
            </div>
        </div>
    </header>
    <!-- Content section 1-->

    <div class="corfundo">
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <!-- 700x700-->
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/inicio04.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Seja bem vindo ao Mezun!</h2>
                            <p class="fs-5">Nosso site conta com ferramentas para aulixiar seu retorno ao mercado de trabalho de forma rápida e segura, prezando pela sua privacidade e de seus dados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- 700x700-->
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/inicio05.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Nossas ferramentas:</h2>
                            <p class="fs-5">O Mezun conta com diversas empresas e infinitas possibilidades de emprego, conseguindo assim, atingir todas as regiões do país e toda população brasileira de forma acessível e prática.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
}



require "footer.php";
?>