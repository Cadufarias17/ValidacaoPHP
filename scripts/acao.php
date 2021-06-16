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

    require 'conexao.php';
    session_start();

    function EditarUsuario($link, $nome, $email, $telefone, $rua, $numero, $complemento, $cep, $cidade, $senha, $foto, $id){
        $query = "	UPDATE Usuarios 
                    SET nome='$nome', email='$email', telefone='$telefone', rua='$rua', numero=$numero, 
                        complemento='$complemento', cep=$cep, cidade='$cidade', senha='$senha', foto='$foto' 
                    WHERE id LIKE $id";
        mysqli_query($link, $query) or die(mysqli_error($link));
        //testa se o ID veio
        if($link->affected_rows > 0){
            echo 'Usuário editado com sucesso! <br><br> <a href="usuario.php"> Voltar</a>';
			$_SESSION["nome"] = $nome;
			$_SESSION["email"] = $email;
			$_SESSION["telefone"] = $telefone;
			$_SESSION["rua"] = $rua;
			$_SESSION["numero"] = $numero;
			$_SESSION["complemento"] = $complemento;
			$_SESSION["cep"] = $cep;
			$_SESSION["cidade"] = $cidade;
			$_SESSION["foto"] = $foto;
        } else {
            echo 'Erro ao editar usuário!';
        }
        //header('Location: usuario.php');
    }
    function ExcluirArquivo($link, $id) {
        $query = "DELETE FROM Usuarios WHERE id LIKE $id;";
        mysqli_query($link, $query) or die(mysqli_error($link));
        if($link->affected_rows > 0) {
            session_destroy();
            echo 'Usuário excluido com sucesso! <br><br> <a href="../index.php"> Pagina inicial</a>';
        } else {
            echo 'Erro ao excluir usuário!';
        }
    }

    if (!empty($_POST["Editar"])) {
        //echo 'Editar';
        $id = $_SESSION['id'];
        $nome = addslashes(htmlspecialchars($_POST["nome"]));
        $email = addslashes(htmlspecialchars($_POST["email"]));
        $telefone = addslashes(htmlspecialchars($_POST["telefone"]));
        $rua = addslashes(htmlspecialchars($_POST["rua"]));
        $numero = addslashes(htmlspecialchars($_POST["numero"]));
        $complemento = addslashes(htmlspecialchars($_POST["complemento"]));
        $cep = addslashes(htmlspecialchars($_POST["cep"]));
        $cidade = addslashes(htmlspecialchars($_POST["cidade"]));
        $senha = md5(addslashes(htmlspecialchars($_POST["senha"])));
        if (isset($_FILES['foto'])) {

            $extensao = strtolower(substr($_FILES['foto']['name'], -4));
            $foto_nome = md5(time()) . $extensao;
            $diretorio = "../fotos/";
            move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$foto_nome);

            EditarUsuario($link, $nome, $email, $telefone, $rua, $numero, $complemento, $cep, $cidade, $senha, $foto_nome, $id);
        }else{
            echo 'Foto não foi selecionada!';
        }
    }

    if (!empty($_POST["Excluir"])) {
        //echo 'Excluir';
        $id = $_SESSION['id'];
        ExcluirArquivo($link, $id);
    }

    if (!empty($_POST["Logout"])) {
        echo 'Logout';
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');
        $_SESSION["hora_logout"] = $date;

        echo 'login: '.$_SESSION["hora_login"].'<br>';
        echo 'logout: '.$_SESSION["hora_logout"].'<br>';
        $novo_conteudo = $_SESSION['email'].', '.$_SESSION["hora_login"].', '.$_SESSION["hora_logout"].';';

        $arquivo = fopen("../logs.txt", "a+");
        fwrite($arquivo, $novo_conteudo);
        fclose($arquivo);

        session_destroy();
        header('Location: ../index.php');
    }

?>
    </div>
</body>
</html>