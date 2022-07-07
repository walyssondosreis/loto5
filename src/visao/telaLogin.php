<?php
require_once "header.php";
?>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="POST">
            <!-- <img class="mb-4" src="../../../loto5/assets/brand/tiger.svg" alt="" width="72" height="57"> -->
            <img class="mb-4" src="../../../loto5/assets/brand/zebra.svg" alt="" width="200" height="250">
            <h1 class="h3 mb-3 fw-normal"> <strong> LOTO ZEBRA </strong></h1>

            <div class="form-floating">
                <input type="text" class="form-control text-center" id="iptNomeUsuario" name="iptNomeUsuario" required>
                <label for="iptNomeUsuario">Usuário</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control text-center" id="iptSenha" name="iptSenha" required>
                <label for="iptSenha">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="iptSalvarLogin" value="1"> Salvar login
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>

    <?php
    require_once "scripts.php";
    ?>

</body>

</html>