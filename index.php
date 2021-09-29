<?php require ("header.php");?>
<div class="mt-30">
    <div class="all">
        <div class="container">
            <div class="row align-my-status">
                <div class="col-70">
                    <div class="profile-home ds-flex">

                        <div class="foto">
                            <img src="assets/images/foto.png" alt="foto">
                        </div>

                        <div class="welcome">
                            <h1 class="text-default">Olá,</h1>
                            <p class="text-dark">Isaac Borges</p>
                        </div>
                    </div>
                </div>
                <div class="col-30">
                    <div class="my-status center">
                        <a href="#" class="text-white ">Disponível</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container jsc-request">
    <div class="row">
        <div class="col-1">
            <div class="ride mt-30">
                <header><h2 class="text-default center">Solicitação de Entrega</h2></header>
                <div class="row">
                    <div class="col-1">
                        <div class="initial mt-30">
                            <p class="text-dark"><i class="far fa-compass"></i> <b>ORIGEM</b></p>
                            <span class="text-default">Dods Sorvetes Fast Food</span>
                            <span class="text-gray">Rua sebastião barreto, 144W, Centro</span>
                        </div>

                        <div class="destiny mt-20">
                            <p class="text-dark"><i class="fas fa-map-marker-alt"></i> <b>DESTINO</b></p>
                            <span class="text-gray">Rua J, 1855 N Tarumã</span>
                        </div>
                    </div>

                    <div class="col-60">
                        <div class="delivery mt-20">
                            <p class="text-dark"><i class="far fa-credit-card"></i> <b>VALOR DA CORRIDA</b></p>
                        </div>
                    </div>
                    <div class="col-40">
                        <div class="price-delivery mt-20 right">
                            <span class="text-gray">R$ 8,00</span>
                        </div>
                    </div>

                </div>

                <div class="actions-ride mtb-30 ds-flex">
                    <a href="#" class="text-white btn-accept jsc-accept">Aceitar</a>
                    <a href="#" class="text-white btn-reject">Rejeitar</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--EM CORRIDA -->
<section class="container jsc-delivery-in-ride ds-none">
    <div class="row">
        <div class="col-1">
            <div class="ride mt-30 in-ride">
                <header><h2 class="text-default center">Entrega em andamento</h2></header>
                <div class="row">
                    <div class="col-1">
                        <div class="initial mt-30">
                            <p class="text-dark"><i class="far fa-compass"></i> <b>ORIGEM</b></p>
                            <span class="text-default">Dods Sorvetes Fast Food</span>
                            <span class="text-gray">Rua sebastião barreto, 144W, Centro</span>
                        </div>

                        <div class="destiny mt-20">
                            <p class="text-dark"><i class="fas fa-map-marker-alt"></i> <b>DESTINO</b></p>
                            <span class="text-gray">Rua J, 1855 N Tarumã</span>
                        </div>
                    </div>

                    <div class="col-60">
                        <div class="delivery mt-20">
                            <p class="text-dark"><i class="far fa-credit-card"></i> <b>VALOR DA CORRIDA</b></p>
                        </div>
                    </div>
                    <div class="col-40">
                        <div class="price-delivery mt-20 right">
                            <span class="text-gray">R$ 8,00</span>
                        </div>
                    </div>

                </div>

                <div class="actions-ride mtb-30 ds-flex">
                    <a href="#" class="text-white btn-reject">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--EM CORRIDA -->
<?php require ("footer.php");?>