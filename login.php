<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Alien Invader</title>
</head>
<body>

<div class="box">
    <?php
        
        if(isset($erro))
	    echo '<div style="color:#F00">'.$erro.'</div><br/><br/>';
 
    ?>
       <form action="testLogin.php" method="POST">
        <fieldset>
        <legend><b class="logo">AlienInvader Login</b></legend>
        <br>
        <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelInput">E-mail</label>
        </div>
        <br><br>
        <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
        <label for="senha" class="labelInput">Senha</label>
        </div>
        <br>
        <div class="centralizar">
        <input id="submit" type="submit" name="submit" value="Enviar"><br/><br/>
        <button id="submit" href="home.php">Voltar</button>
        </div>
        
    </div>
</fieldset>
</form>
</body>
</html>

