<?php
require_once "header.php";
?>

<body>
    <?php
    require_once "navbar.php";
    ?>
    <div class="container-fluid">
        <form action="" method="post">
            <div class="row">
                <p> Bem vindo Walysson!</p>
            </div>

            <div class="row">
                <div class="col">
                    <p>Criar novo jogo:</p>
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
                </div> <!-- Fim col -->
                <div class="col">
                    <p> Selecionar dos meus jogos:</p>
                </div> <!-- Fim col -->
            </div> <!-- Fim row -->

            <div class="row">
                <p> Selecionar grupo da aposta</p>
                <div class="col">
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="1">Lotofacil</option>
                        <option value="2">Vox</option>
                        <option value="3">Grupo 2</option>
                        <option value="4">Novo Grupo</option>
                    </select>
                </div>
                <div class="col input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                </div>
            </div>

            <div class="row">
                <p> botao de adicionar carrinho</p>
                <p> botao de finalizar aposta </p>
                <p> botao de limpar aposta </p>
            </div>


        </form>
    </div> <!-- Fim continer-fluid -->
    <?php
    require_once "footer.php";
    ?>
</body>

</html>