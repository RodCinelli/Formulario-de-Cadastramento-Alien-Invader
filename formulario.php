<?php

if(isset($_POST['submit']))
{
    /*print_r('Nome:'.$_POST['nome']);
    print_r('<br>');
    print_r('Email:'.$_POST['email']);
    print_r('<br>');
    print_r('Telefone:'.$_POST['telefone']);
    print_r('<br>');
    print_r('Sexo:'.$_POST['genero']);
    print_r('<br>');
    print_r('Data de nascimento:'.$_POST['data_nascimento']);
    print_r('<br>');
    print_r('Cidade:'.$_POST['cidade']);
    print_r('<br>');
    print_r('Estado:'.$_POST['estado']);
    print_r('<br>');
    print_r('Endereço:'.$_POST['endereco']);*/ 

    if(isset($_POST["nome"]) && isset($_POST["senha"]) && isset($_POST["email"]) && isset($_POST["nickname"]) && isset($_POST["data_nasc"]) && isset($_POST["sexo"]) && isset($_POST["pais"]))
{
        if (empty($_POST["nome"])) 
          $erro = "Campo nome obrigatório";
         else 
        
        if (empty($_POST["senha"])) 
        $erro = "Campo senha obrigatório";
        else 

        if (empty($_POST["email"])) 
        $erro = "Campo email obrigatório";
        else 
          
        if (empty($_POST["nickname"])) 
        $erro = "Campo telefone obrigatório";
        else 
          
        if (empty($_POST["data_nascimento"])) 
        $erro = "Campo data de nascimento obrigatório";
        else 
           

        if (empty($_POST["sexo"])) 
        $erro = "Campo cidade obrigatório";
        else 
           
          
        if (empty($_POST["pais"])) 
        $erro = "Campo estado obrigatório";
        else {
           
    
        include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $pais = $_POST['pais'];
    
    $result = mysqli_query($conexao, "INSERT INTO personagem(nome,senha,email,nickname,data_nasc,sexo,pais)
    VALUES('$nome','$senha','$email','$nickname','$data_nasc','$sexo','$pais','$sexo','$pais')");

   
       
          header('Location: login.php');
        }  
    } 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Alien Invader</title>

</head>

<body>

    <div class="box">
    <?php
        
        if(isset($erro))
	    echo '<div style="color:#F00">'.$erro.'</div><br/><br/>';
 
    ?>
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b class="logo">Cadastro AlienInvader</b></legend>
                <br><br>
                <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
                <br><br>
                <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="text" name="nickname" id="nickname" class="inputUser" required>
                <label for="nickname" class="labelInput">Nome do Personagem</label>
                </div>
                <br>
                <div class="date">
                <label for="data_nascimento"><p>Data de Nascimento:</p></label>
                <br>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br>
                <div class="date">
                <label for="sexo"><p>Sexo do Personagem:</p></label>
                <br>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Masculino</label>
                <br><br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Feminino</label>
                <br>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="text" name="pais" id="pais" class="inputUser" required>
                <label for="pais" class="labelInput">País de Origem</label>
                </div>
                <br>
                <div class="centralizar">
                <button id="submit" href="home.php">Cadastrar</button>
                </div>
                
                
           </div>
</fieldset>
</form>
</body>
</html>


