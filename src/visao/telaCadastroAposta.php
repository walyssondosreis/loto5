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
                <img class="d-block mx-auto mb-2 mt-2" src="../../../loto5/assets/brand/zebra.svg" alt="" width="180" height="180">
                <h2> Loto Zebra</h2>
                <p class="lead"> Crie jogos e apostas para a Lotofácil Caixa.
                    Faça análises de números e sequências de resultados. <br>
                    Gerencie bolões e grupos de apostas. Fuja do azar!</p>
            </div>

            <div class="row g-6">
                <!-- CARRINHO DE APOSTA -->
                <div class="col-md-5 col-lg-6 order-md-last">
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
                        x e
                            <div>
                            
                                <h6 class="my-0">1-2-3-4-5-6-7-8-9-10-11-12-13-14-15</h6>
                                <small class="text-muted">2500.1#walyssondosreis</small>

                            </div>
                            <span class="text-muted">R$ 2,50</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                        x e
                            <div>
                            
                                <h6 class="my-0">1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16</h6>
                                <small class="text-muted">2500.2#walyssondosreis</small>

                            </div>
                            <span class="text-muted">R$ 40,00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                        x e
                            <div>
                            
                                <h6 class="my-0">1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17</h6>
                                <small class="text-muted">2500.3#walyssondosreis</small>

                            </div>
                            <span class="text-muted">R$ 340,00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                        x e
                            <div>
                            
                                <h6 class="my-0">1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18</h6>
                                <small class="text-muted">2500.4#walyssondosreis</small>

                            </div>
                            <span class="text-muted">R$ 2040,00</span>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BR)</span>
                            <strong>R$ 2442,50</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Inserir jogo por linha">
                            <button type="submit" class="btn btn-secondary">Incluir</button>
                        </div>
                    </form>
                </div>
                <!-- FIM CARRINHO APOSTA -->
                <div class="col-md-6 col-lg-6">
                    <h4> Bem Vindo <?php echo $_SESSION['nomeUsuarioLogado'] . " !"?></h4>
                    <p class="lead">Escolha de 15 a 18 números para jogar</p>
                    <form class="needs-validation" novalidate>

                        <div class="row g-2">

                            <div class="col-7 text-center">
                                <hr class="my-2">
                                <!-- Grupo de botões/números -->
                                <?php
                                $idBotao = "btncheck";
                                for ($i = 1; $i <= 25; $i++) :
                                ?>
                                    <div class="btn-group" role="group">
                                        <input type="checkbox" class="btn-check " value=<?php echo $i ?> id=<?php echo $idBotao . $i ?> autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle border border-2 border-secondary" style="font-weight: bold;" for=<?php echo $idBotao . $i ?>> <?php echo str_pad($i, 2, '0', STR_PAD_LEFT) ?></label>
                                    </div> <!-- Fim grupo de botões -->
                                <?php endfor ?>
                                <hr class="my-4">
                            </div> <!-- Fim Grupo de botões/números -->

                            <div class="col-5 text-center">
                                <div class="mb-5"></div> <!-- Só pra dar espaçamento botões -->
                                <div>
                                    <button type="button" class="btn btn-danger btn-sm mb-3 col-8 text-center">Limpar carrinho</button>
                                    <button type="button" class="btn btn-success btn-sm mb-3 col-8 text-center">Salvar jogos</button>
                                    <button type="button" class="btn btn-primary btn-sm mb-3 col-8 text-center">Salvar e apostar</button>
                                </div>
                            </div>


                            <div class="col-12 text-center">
                                <a href="">Selecionar jogo salvo</a>
                            </div>

                            <!-- Botões de finalização/submissão -->

                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-secondary btn-md col-5">Limpar aposta</button>
                                <button type="button" class="btn btn-dark btn-md col-5">Adicionar carrinho</button>
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