<?php
require_once "header.php";
?>

<body>
    <?php
    require_once "navbar.php";
    ?>

    <main>
        <form action="" method="post">

            <!-- Primeira sessão do formulário: Apresentação -->
            <section class="container-fluid" style="background-color: yellow;">
                <h2 class="text-center"> Bem vindo Walysson!</h2>
                <p class="text-center"> Crie seus jogos facilmente e aposte já!</p>
            </section>

            <!-- Segunda sessão do formulário: Botôes de preenchimento jogo -->
            <section class="container-fluid">
                <div class="container mb-3">
                    CRIAR JOGO:
                </div>
                <div class="container mb-3">
                    <!-- Grupo de botões -->
                    <?php
                    $idBotao = "btncheck";
                    for ($i = 1; $i <= 25; $i++) :
                    ?>
                        <div class="btn-group" role="group">
                            <input type="checkbox" class="btn-check " value=<?php echo $i ?> id=<?php echo $idBotao . $i ?> autocomplete="off">
                            <label class="btn btn-outline-dark rounded-circle" for=<?php echo $idBotao . $i ?>> <?php echo str_pad($i, 2, '0', STR_PAD_LEFT) ?></label>
                        </div> <!-- Fim grupo de botões -->
                    <?php endfor ?>
                </div> <!-- Fim row -->

                <div class="container"><a href="">SELECIONAR JOGO SALVO</a></div>
            </section>

            <!-- Terceira sessão do formulário: Grupo de aposta -->
            <section>
                <div>
                    <!-- Grupo de aposta irá informar o grupo e um botão para alterar -->
                    <p>Grupo da Aposta: Lotofacil </p>
                    <button type="button" class="btn btn-primary btn-sm">Alterar</button>
                </div>
            </section>

            <!-- Quarta sessão do formulário: Botões de finalização/submissão -->
            <section>
                <div>
                    <button type="button" class="btn btn-primary btn-sm">Adicionar carrinho</button>
                    <button type="button" class="btn btn-primary btn-sm">Finalizar aposta</button>
                    <button type="button" class="btn btn-primary btn-sm">Limpar aposta</button>
                    <button type="button" class="btn btn-primary btn-sm">Limpar carrinho</button>
                </div>
            </section>


        </form> <!-- Fecha formulário-->
    </main>
    <?php
    require_once "footer.php";
    ?>
</body>

</html>