<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8" />
	<head>

			<title>Banco Z</title>
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Nunito:wght@300&display=swap" rel="stylesheet">
		<style type="text/css">

			body{
				background: rgb(2,0,36);
				background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
			}

			div.global{
				width: 20%;
				height: auto;
				background-color: #fff;
				border: 1px solid #606060;
				padding: 50px;
				box-shadow: 0px 0px 10px #000;
				margin-top: 5%;
				margin-left: auto;
				margin-right: auto;
				border-radius: 50px;
				font-family: 'Nunito', sans-serif;
				font-size: 20px;

			}

			input[type='text'], input[type='password']{
				width: 370px;
				height: 25px;
				border: solid 1px #606060;
				border-radius: 10px;
			}

			input[type='password']{
				width: 370px;
			}	
			
			input[type='submit']{
				width: 150px;
				height: 30px;
				border-radius: 10px;
				margin-left: 110px;
				background: #ccccff;
				font-size: 20px;
			}

			p{
				width: 20%;
				height: 100px;
				background-color: #fff;
				border: 1px solid #606060;
				padding: 50px;
				box-shadow: 0px 0px 10px #000;
				margin-top: 10%;
				margin-left: auto;
				margin-right: auto;
				border-radius: 50px;
				font-size: 95px;
				text-align: center;
				color: #1d2bf2;
				font-family: 'Dancing Script', serif;
			}

		</style>

	</head>
	

	<body>

		<p>Banco Z</p>

		<div class="global">

			<form name="" method="post" action="">
				<label>Usuário: <input type="text" name="user" /></label><br /><br />
				<label>Senha: <input type="password" name="pass" /></label><br /><br />
				<input type="submit" name="submit" value="Entrar" />
			</form>


			<?php

				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];

				/*variáveis: usuarios e senhas */
				$user1 = 'luciana';
				$pass1 = 'lu123';
				
				$user2 = 'sabrina';
				$pass2 = 'sa123';

				$user3 = 'sah';
				$pass3 = 'aaa';
				

				if($submit){
					
					if($user == "" || $pass == ""){
						echo "<script>alert('Por favor, preencha todos os campos!');</script>";
					}
					
					else{

						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2) || ($user == $user3 && $pass == $pass3)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.php");
						}

							else{
								echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
							}
					}

				}
			?>
		</div>
	</body>
</html>	
	