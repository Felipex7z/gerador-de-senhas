<?php 
// recebendo dados do POST e colocando em variaveis
if(isset($_POST["num-de-caracter"])){
    $quantDecarac = intval($_POST["num-de-caracter"]);
    $letrasUpper = isset($_POST["upper"]);
    $letrasLow = isset($_POST["low"]);
    $numbers = isset($_POST["number"]);
    $simbols = isset($_POST["caracters"]);

    if(!$letrasUpper && !$letrasLow && !$numbers && !$simbols){
        echo "{ERRO} marque alguam alternativa para que sua senha ser gerada";
    }




    //colocando as  opções para gerar a senha em variaveis

        $letrasmaiusculas ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $letrasminusculas ="abcdefghijklmnopqrstuvwxyz";
        $numeros = "012345678910" ;
        $caracs = "!@#$%^&*()";

        $senha = "";
        $validandosenha = "";
        $caracterAleatorio = "";



         //concatenando o post e as opçôes 
        if($letrasUpper){
            $validandosenha .= $letrasmaiusculas;
        }
        if($letrasLow){
            $validandosenha .= $letrasminusculas;
        }
        if($numbers){
            $validandosenha .=  $numeros;
        }
        if($simbols){
            $validandosenha .= $caracs;
        }
        

        for($i = 0; $i < $quantDecarac; $i++){
            $caracterAleatorio = rand(0, strlen($validandosenha) - 1);
            $senha .= $validandosenha[$caracterAleatorio];
        }
      
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST" action="">
    <label for="num-de-car">número de caracter</label>
    <input type="number" min= "8" value="8" name="num-de-caracter" id=""> <br>


    <label for="upper">letras maiusculas</label>
    <input type="checkbox" name="upper" id=""> <br>

    <label for="low">letras minusculas</label>
    <input type="checkbox" name="low" id=""> <br>

    <label for="number">numeros</label>
    <input type="checkbox" name="number" id=""> <br>

    <label for="caracters">Caracteres</label>
    <input type="checkbox" name="caracters" id="">
      <input type="submit" value="Gerar-senha">

     </form>
     
    <?php if(isset($senha)){?>
        <h4>SENHA GERADA</h4>
        <input type="text"  readonly  value="<?php echo $senha ?>">
    <?php } ?>

    
</body>
</html>