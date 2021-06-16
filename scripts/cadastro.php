<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div>
<?php 

    require 'conexao.php';

    function IncluirUsuario($link, $nome, $email, $telefone, $rua, $numero, $complemento, $cep, $cidade, $senha, $foto){
        $query = "	INSERT INTO Usuarios 
                        (nome, email, telefone, rua, numero, complemento, cep, cidade, senha, foto) 
                    VALUES 
                        ('$nome', '$email', '$telefone', '$rua', $numero, '$complemento', $cep, '$cidade', '$senha', '$foto');";
        mysqli_query($link, $query) or die(mysqli_error($link));
        //testa se o ID veio
        if($link->insert_id > 0){
            echo 'Usuário criado com sucesso!';
        } else {
            echo 'Erro ao criar usuário!';
        }
        //header('Location: usuario.php');
    }

    function VerificaEmail($link, $email) {
        $query = "SELECT email FROM Usuarios;";
        $resultado = mysqli_query($link, $query);
        while ($linha = mysqli_fetch_array($resultado)) {
            if ($email == $linha["email"]) {
                return FALSE;
            }
        }
        return TRUE;
    }

    if (!empty($_POST["Enviar"])) {
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

            if (VerificaEmail($link, $email)) {
                IncluirUsuario($link, $nome, $email, $telefone, $rua, $numero, $complemento, $cep, $cidade, $senha, $foto_nome);
            }else{
                echo 'Email já cadastrado!';
            }
        }else{
            echo 'Foto não foi selecionada!';
        }
        
        /*
        echo 'nome: '.$nome.'<br>';
        echo 'email: '.$email.'<br>';
        echo 'telefone: '.$telefone.'<br>';
        echo 'rua: '.$rua.'<br>';
        echo 'numero: '.$numero.'<br>';
        echo 'complemento: '.$complemento.'<br>';
        echo 'cep: '.$cep.'<br>';
        echo 'cidade: '.$cidade.'<br>';
        echo 'senha: '.$senha.'<br>';
        */

    }

?>
        <a href="../index.php"> Voltar</a>
    </div>
</body>
</html>