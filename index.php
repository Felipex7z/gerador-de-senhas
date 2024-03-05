    <?php include_once("text.php");
if(isset($_POST["num-de-car"])){
        $numd = intval($_POST["num-de-car"]);
        $maius = isset($_POST["maius"]);
        $minus = isset($_POST["minus"]);
        $num = isset($_POST["num"]);
        $carac = isset($_POST["carac"]);
        if(!$maius && !$minus && !$num && $carac){
            echo "escolha pelo menus uma opção para gerar sua senha";
        }
        
        $letrasmaiusculas ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $letrasminusculas ="abcdefghijklmnopqrstuvwxyz";
        $numeros = "012345678910" ;
        $caracs = "!@#$%^&*()";

        $senha = "";
        $t ="";
        $numaleatorio= "";

    if($maius){
        $t .=$letrasmaiusculas;

    }
    if($minus){
        $t .=$letrasminusculas;

    }
    if($num){
        $t .=$numeros;

    }
    if($carac){
        $t .=$caracs;

    }

    for($i = 0; $i < $numd; $i++){
        $numaleatorio = rand(0, strlen($t) -1);
        $senha .= $t[$numaleatorio];
    }



 }












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
    <label for="num-de-car">tamanho senha</label>
    <input type="number" min= "8" value="8" name="num-de-car" id=""> <br>


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
<?php 
if(isset($senha)){ ?>
    <h4>senha gerada</h4>
    <input type="text" readonly value="<?php echo $senha ?>">
 <?php } ?>




  
</body>
</html>