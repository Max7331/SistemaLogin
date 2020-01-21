<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css">
        <title>Sistema de Cadastro</title>
    </head>
    <body>
        <div class="conteiner">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consultas.php"><li>Consulta</li></a>
            </nav>
            <section>
                <h1>Cadastrar Usuário</h1>
                <hr><br><br>

                <form method="POST" action="processar.php">
                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" require autofocus><br>
                    Sobrenome<br>
                    <input type="text" name="sobrenome" class="campo" maxlength="40" require autofocus><br>
                    Nascimento<br>
                    <input type="date" name="date" class="campo" maxlength="100" require><br>
                    Email<br>
                    <input type="email" name="email" class="campo" maxlength="50" require><br>
                    Senha<br>
                    <input type="password" name="senha" class="campo" maxlength="200" require><br>
                
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br><br>

            
                </form>
            </section>
        </div>
    </body>
</html>