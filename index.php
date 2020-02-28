<?php
echo "Hola Mundo ";
$numero =5.3;
// siempresiete que ir el simbolo de pesos para empezar para crear y llamar
// echo $numero;
var_dump($numero);
echo"<h1>Hola Mundo</h1>";
echo'<br>';
$palabra1="hola";
echo'<br>';
$palabra2="como estas";
echo'<br>';
// echo $palabra1.$palabra2;
echo $palabra1."".$palabra2;
$numero1=7.9;
$numero2=4.8;
echo'<br>';
$total=$numero1+$numero2;
echo'<br>';
echo $total;
$valor = 2;
if($valor>3){
    echo "<h3> es mayor </h3>";

}

else{
    echo "<h3> no es mayor </h3>";
}
$selector='a';
switch ($selector){
    case'a':
        echo"caso a";
    break;
    case 'b':
        echo"caso b";
    break;
}
$contador=0;
while ($contador<3){
    $contador++;
}
echo '<br>';
echo"contador:".$contador;

echo '<br>';
echo"contador: ".$contador;
for($i=0;$i<5;$i++){
    echo"<li>valor:".$i."</li>";"
}

?>


<!-- operadoreslogicosdephp and or&& || 77 >,<,>=<==,== -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>index</h1>
</body>
</html> -->