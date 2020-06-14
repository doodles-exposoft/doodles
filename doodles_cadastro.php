<!DOCTYPE html> 
<html> 
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">    <link href="img/lampada.png" rel="icon">
    <link rel="stylesheet" href="doodles_css.css">
    <title>doodles</title>
  </head> 
  <body> 

    <div class="barra_azul"></div>
<header> 
  <div>
    <div class="header_img"><a href="doodles_home.html"> <img src="img/logo.png" width="250px"/> </a>
        </div>
    </div>
    <div class="imagens">
      <div class="proflie_img"><a href="doodles_cadastro.html"><img src="img/profile.png" width="50px"></a>
        </div>
        <div class="cart_img"><a href="#"><img src="img/carrinho.png" width="50px"></a>
      </div>
      </div>
 <div class="topnav">
          <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search..." name="search">
              <button type="submit">Buscar</button>
            </form>
            <h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp TÓPICO 1 &nbsp TÓPICO 2 &nbsp TÓPICO 3 &nbsp TÓPICO 4</h3>
          </div>
          
</header>

<div>
	<h1>Cadastre-se</h1>
		<form method="POST" action="" onsubmit="return checkForm(this);">
			<fieldset>
				<legend>Criação de usuário</legend>

				<label for="user">Usuário</label> <br>
					<input type="text" name="user"> <br>

				<label for="email">Email</label> <br>
					<input type="text" name="email"> <br>

				<label for="pwd1">Senha</label> <br>
					<input type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" 
					onchange="form.pwd2.pattern = RegExp.escape(this.value);" 
					title="Use Letras maiúsculas, minusculas e números!"> <br>
				
				<label for="CPF">CPF</label> <br>
					<input type="text" name="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}$"> <br>
				
				<label for="nome">Nome</label> <br>
					<input type="text" required min="3" name="nome" 
					pattern="([A-ZÀ-Ú]{1})([a-zà-ú]{2,})(([\s]{1}[A-ZÀ-Ú]{1})([a-zà-ú]{1,}))+"> <br>
				
				<label for="pwd2">Confirmar senha</label><br>
					<input type="password" required name="pwd2"> <br>

			</fieldset>
			<p><input type="submit" ></p>
    </form> 

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>

	</div>
  
  
  <?php
$conexao=@mysqli_connect("localhost","root","","doodles") or die ("erro conexão com servidor");

            $email = $_POST['email'];
            $confirmasenha = $_POST['senha'];
          
    if($Nome !==""){
    $sql="SELECT*from login where login = $.login.";
        $resultado = @mysqli_query($conexao,$sql);
        $resgistro = @mysqli_num_rows($resultado);
    
    if($registro = !=0){
        while($login = @mysqli_fetch_array($resultado)){
            if$login["confirmasenha"] = $senha
            echo"tel".$usuario["Tel"]."<br/>";
             
            }
        }
     else {echo"Registro não localizado";
     ?>

	
</body>
</html>