

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Low Prices</title>
        <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/login_registro.css">
    </head>
    <body>
        <img src="assets/low_price.png" alt="logo Low Price" class="logo">

        <nav id="toobar">
            <div style="margin-left: auto;">
                <a href="registro.html"><button type="button" id="cadastrar" class="button-toobar" >Cadastrar-se</button></a>
            </div>
        </nav>

        <form method="post" action = "actionlogin.php">
            <h1>Entrar</h1>
            <input type="text" placeholder="Email:" id="email" name="email" class="input">
            <input type="password" placeholder="Senha" id="senha" name="senha" class="input">
            <button type="submit" class="entrar">entrar</button>

        </form>
    </body>
</html>