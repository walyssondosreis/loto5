<?php
require_once "header.php";
?>

<body class="bg-light">
    <?php
    require_once "navbar.php";
    ?>

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../../../loto5/assets/brand/zebra.svg" alt="" width="180" height="180">
                <h2> Loto Zebra</h2>
                <p class="lead"> Crie jogos e apostas para a Lotofácil Caixa.
                    Faça análises de números e sequências de resultados. <br>
                    Gerencie bolões e grupos de apostas. Fuja do azar!</p>
            </div>

            <div class="row g-5">
                <!-- CARRINHO DE APOSTA -->
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Seu carrinho</span>
                        <span class="badge bg-primary rounded-pill">3</span>

                    </h4>
                    <div class="container text-center mb-3">
                        <!-- Grupo de aposta irá informar o grupo e um botão para alterar -->
                        Grupo da aposta: Lotofácil
                        <a href="">(Alterar)</a>
                    </div>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>
                <!-- FIM CARRINHO APOSTA -->
                <div class="col-md-7 col-lg-8">
                    <h4> Bem Vindo Walysson!</h4>
                    <p class="lead">Escolha de 15 a 18 números para jogar</p>
                    <form class="needs-validation" novalidate>

                        <div class="row g-3">
                            <hr class="my-4">
                            <div class="col-6 text-center">
                                <!-- Grupo de botões/números -->
                                <?php
                                $idBotao = "btncheck";
                                for ($i = 1; $i <= 25; $i++) :
                                ?>
                                    <div class="btn-group" role="group">
                                        <input type="checkbox" class="btn-check " value=<?php echo $i ?> id=<?php echo $idBotao . $i ?> autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle border border-3 border-secondary" style="font-weight: bold;" for=<?php echo $idBotao . $i ?>> <?php echo str_pad($i, 2, '0', STR_PAD_LEFT) ?></label>
                                    </div> <!-- Fim grupo de botões -->
                                <?php endfor ?>
                            </div> <!-- Fim Grupo de botões/números -->

                            <div class="col-6 text-center">
                                <div>
                                    <button type="button" class="btn btn-danger btn-md mb-3 col-6 text-center">Limpar carrinho</button>
                                    <button type="button" class="btn btn-success btn-md mb-3 col-6 text-center">Salvar jogos</button>
                                    <button type="button" class="btn btn-primary btn-md mb-3 col-6 text-center">Salvar e apostar</button>
                                </div>
                            </div>
                            <hr class="my-4">

                            <div class="col-12 text-center">
                                <a href="">Selecionar jogo salvo</a>
                            </div>


                            <!-- Botões de finalização/submissão -->

                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-warning btn-md col-4">Limpar aposta</button>
                                <button type="button" class="btn btn-secondary btn-md col-4">Adicionar carrinho</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <?php
    require_once "footer.php";
    require_once "scripts.php";
    ?>
</body>

</html>