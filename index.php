<?php include_once("text.php");











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GERADOR DE SENHAS</title>
</head>
<body>

<h3><?php echo $txt; ?></h3>

<form  method="POST" action="">
    <label for="maius">letras maiusculas</label>
    <input type="checkbox" name="maius" id=""> <br>

    <label for="minus">letras minusculas</label>
    <input type="checkbox" name="minus" id=""> <br>

    <label for="num">numeros</label>
    <input type="checkbox" name="num" id=""> <br>

    <label for="carac">Caracteres</label>
    <input type="checkbox" name="carac" id="">
      <input type="submit" value="Gerar senha">


</form>

  
</body>
</html>