<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Calculadora</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

  <style>
         .soma{
    border: solid black 3px;
    text-align: center;
    background-color: yellow;
    border-radius: 10px;  

}

    .subtrair{
    border: solid black 3px;
    text-align: center;
    background-color: yellow;
    border-radius: 10px;  
} 
    .dividir{
    border: solid black 3px;
    text-align: center;
    background-color: yellow;
    border-radius: 10px;  
} 
    .multiplicar{
    border: solid black 3px;
    text-align: center;
    background-color: yellow;
    border-radius: 10px;  
} 
    </style>
    </head>

    <body>
     <div class="img">
        <form  method="POST"> 
            <fieldset>
           <legend>Calculadora</legend>
            <p>Valor 1: <input type="text" name="number1"  required id="number1" placeholder="Digite um número"></p>
            <p>Valor 2: <input type="text" name="number2"  required placeholder="Digite um número"></p>
            <p><input type="submit" value="somar" name="btn-somar"></p>
            <p><input type="submit" value="subtrair" name="btn-subtrair"></p>
            <p><input type="submit" value="dividir" name="btn-dividir"></p>
            <p><input type="submit" value="multiplicar" name="btn-multiplicar"></p>
        
            <hr>
           <?php
                    
                    
              

                if(isset($_POST['btn-somar'])){
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];  
                     $soma = $number1 + $number2;
                    echo "<div class=soma>A soma é: $soma</div>";
            }                
      
            if (isset($_POST['btn-subtrair'])) {
                     $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                $subtrair = $number1 - $number2;
                echo"<div class=subtrair>A diferença é: $subtrair</div>";
            }

            if (isset($_POST['btn-dividir'])){
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $dividir =$number1 / $number2;
                echo"<div class=dividir>A quociente é: $dividir</div>";
            }
  

            if (isset($_POST['btn-multiplicar'])){
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $multiplicar = $number1 * $number2;
                echo"<div class=multiplicar>A produto é: $multiplicar</div>";
            }
                    
  
  ?>             
        </fieldset>
        </form>
           
        </div>


    </body>


<html>
