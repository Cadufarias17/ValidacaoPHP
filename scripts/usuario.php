<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Usuário</title>
    <style>
        body{
            padding: 5px;
        }
        body div{
            border-style: solid;
            border-width: 2px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>

    <?php
        session_start();
        if (!empty($_SESSION["id"])) {
            
    ?>

        <form action="acao.php" method="post" enctype="multipart/form-data">
            Nome: <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" data-rule="minlen:4" value="<?php echo $_SESSION["nome"] ?>"/>
            <br><br>
            E-mail: <input type="email" class="form-control" name="email" id="email" placeholder="Seu email"
                  data-msg="Please enter a valid email" value="<?php echo $_SESSION["email"] ?>"/>
            <br><br>
            Telefone: <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu Telefone" value="<?php echo $_SESSION["telefone"] ?>"/>
            <br><br>
            Rua: <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua" value="<?php echo $_SESSION["rua"] ?>"/>
            <br><br>
            Nº: <input type="number" class="form-control" name="numero" id="numero" placeholder="Nº" value="<?php echo $_SESSION["numero"] ?>"/>
            <br><br>
            Complemento: <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento" value="<?php echo $_SESSION["complemento"] ?>"/>
            <br><br>
            CEP: <input type="number" class="form-control" name="cep" id="cep" placeholder="CEP" value="<?php echo $_SESSION["cep"] ?>"/>
            <br><br>
            Cidade: <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" data-rule="minlen:4" value="<?php echo $_SESSION["cidade"] ?>"/>
            <br><br>
            Foto: <input type="file" class="form-control" name="foto" id="foto"/>
            <br><br>
            <img src="../fotos/<?php echo $_SESSION["foto"] ?>" alt="Minha Figura" width="150" height="150">
            <br><br>
            Senha: <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" data-rule="minlen:8"/>
            <br><br>
            <input type="submit" name='Editar' value="Editar" class="btn btn-theme btn-lg btn-block"/>
            <input type="submit" name='Excluir' value="Excluir" class="btn btn-theme btn-lg btn-block"/>
            <input type="submit" name='Logout' value="Logout" class="btn btn-theme btn-lg btn-block"/>
        </form>

    <?php
        }else{
    
    ?>

        <form action="acao.php" method="post" enctype="multipart/form-data">
            Nome: <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" data-rule="minlen:4"/>
            <br><br>
            E-mail: <input type="email" class="form-control" name="email" id="email" placeholder="Seu email"
                  data-msg="Please enter a valid email" />
            <br><br>
            Telefone: <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu Telefone"/>
            <br><br>
            Rua: <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua"/>
            <br><br>
            Nº: <input type="number" class="form-control" name="numero" id="numero" placeholder="Nº"/>
            <br><br>
            Complemento: <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento"/>
            <br><br>
            CEP: <input type="number" class="form-control" name="cep" id="cep" placeholder="CEP"/>
            <br><br>
            Cidade: <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" data-rule="minlen:4"/>
            <br><br>
            Foto: <input type="file" class="form-control" name="foto" id="foto"/>
            <br><br>
            Senha: <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" data-rule="minlen:8"/>
            <br><br>
            <input type="submit" name='Editar' value="Editar" class="btn btn-theme btn-lg btn-block"/>
            <input type="submit" name='Excluir' value="Excluir" class="btn btn-theme btn-lg btn-block"/>
            <input type="submit" name='Logout' value="Logout" class="btn btn-theme btn-lg btn-block"/>
        </form>

    <?php
        }
    
    ?>
        <br><br>
        <a href="../index.php"> Página Inicial</a>
    </div>
</body>
</html>