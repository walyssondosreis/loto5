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
                    <div class="container mb-3 text-center" style="width: 280px;">
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

                <div class="container text-center mb-3">
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
                            <th scope="col"></th>
                            <th scope="col">#</th>
                            <th scope="col">Nome do jogo</th>
                            <th scope="col">Números</th>
                            <th scope="col">Qtd. números</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Editar <br> Remover</td>
                            <th scope="row">1</th>
                            <td>2500.1#walyssondosreis</td>
                            <td>1-2-3-4-5-6-7-8-9-10-11-12-13-14-15</td>
                            <td>15</td>
                            <td>R$ 2,50</td>
                        </tr>
                        <tr>
                            <td>Editar <br> Remover</td>
                            <th scope="row">2</th>
                            <td>2500.2#walyssondosreis</td>
                            <td>1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16</td>
                            <td>16</td>
                            <td>R$ 40,00</td>
                        </tr>
                        <tr>
                            <td>Editar <br> Remover</td>
                            <th scope="row">3</th>
                            <td>2500.3#walyssondosreis</td>
                            <td>1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17</td>
                            <td>17</td>
                            <td>R$ 340,00</td>
                        </tr>
                        <tr>
                            <td>Editar <br> Remover</td>
                            <th scope="row">4</th>
                            <td>2500.4#walyssondosreis</td>
                            <td>1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18</td>
                            <td>18</td>
                            <td>R$ 2040,00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <th scope="row">Total: </th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>R$2239,00</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Botões de finalização/submissão -->

                <div class="container text-center mb-5">
                    <button type="button" class="btn btn-primary btn-md">Limpar carrinho</button>
                    <button type="button" class="btn btn-primary btn-md">Salvar jogos</button>
                    <button type="button" class="btn btn-primary btn-md">Salvar e apostar</button>
                </div>
            </div>
        </form> <!-- Fecha formulário-->

    </main>

    <?php
    require_once "footer.php";
    require_once "scripts.php";
    ?>
</body>

</html>