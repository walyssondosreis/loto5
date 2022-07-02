<?php
require_once "header.php";
?>

<body>
    <?php
    require_once "navbar.php";
    ?>

    <main>
        <form action="" method="post">

            <div class="container">
                <!-- Apresentação -->

                <div class="text-center">
                    <h2> Bem vindo Walysson!</h2>
                    <p> Crie seus jogos facilmente e aposte já!</p>
                </div>


                <!-- Botôes de preenchimento jogo -->
                <div>
                    <div class="container mb-3 text-center">
                        Escolha de 15 a 18 números
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
                    <div class="container mb-3 text-center">
                        <a href="">SELECIONAR JOGO SALVO</a>
                    </div>
                </div>

                <!-- Botões de finalização/submissão -->

                <div class="container text-center">
                    <button type="button" class="btn btn-primary btn-sm col">Limpar aposta</button>
                    <button type="button" class="btn btn-primary btn-sm col">Adicionar carrinho</button>
                </div>


            </div>
            <!-- Tabela carrinho de compras -->
            <div class="container">
                <h3>Carrinho de Apostas</h3>
                <!--Grupo de aposta -->
                <div class="container text-center mb-3">
                    <!-- Grupo de aposta irá informar o grupo e um botão para alterar -->
                    Grupo da Aposta: Lotofacil
                    <a href="">(Alterar)</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Botões de finalização/submissão -->

                <div class="container text-center">
                    <button type="button" class="btn btn-primary btn-sm col">Limpar carrinho</button>
                    <button type="button" class="btn btn-primary btn-sm col ">Finalizar aposta</button>
                </div>
            </div>
        </form> <!-- Fecha formulário-->

    </main>

    <?php
    require_once "footer.php";
    ?>
</body>

</html>