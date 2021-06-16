<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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

	function VerificaLogin($link, $email, $senha){
		$query = "	SELECT * FROM Usuarios
					WHERE email LIKE '$email' AND senha LIKE '$senha';";
		$resultado = mysqli_query($link, $query);
	
		if(mysqli_num_rows($resultado) == 1){
			$linha = mysqli_fetch_array($resultado);
			session_start();
			$_SESSION["id"] = $linha["id"];
			$_SESSION["nome"] = $linha["nome"];
			$_SESSION["email"] = $linha["email"];
			$_SESSION["telefone"] = $linha["telefone"];
			$_SESSION["rua"] = $linha["rua"];
			$_SESSION["numero"] = $linha["numero"];
			$_SESSION["complemento"] = $linha["complemento"];
			$_SESSION["cep"] = $linha["cep"];
			$_SESSION["cidade"] = $linha["cidade"];
			$_SESSION["foto"] = $linha["foto"];
			return TRUE;
		}else{
			return FALSE;
		}
	}

	if (!empty($_POST["Enviar"])) {
        $email = addslashes(htmlspecialchars($_POST["email"]));
        $senha = md5(addslashes(htmlspecialchars($_POST["senha"])));

		if (VerificaLogin($link, $email, $senha)) {
			date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d H:i');
            $_SESSION["hora_login"] = $date;
            //echo 'agora: '.$date;
			header('Location: usuario.php');
		}else{
			echo "Email ou senha incorretos! <a href=\"../index.php\"> Voltar</a>";
		}

        //echo 'email: '.$email.'<br>';
        //echo 'senha: '.$senha.'<br>';
    }
?>
		
	</div>
</body>
</html>