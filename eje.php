<?php
//Ejemplos IF PHP
echo "<br>";
echo "Ejemplos IF PHP";
echo "<br>";
echo "Ejemplos 1";
echo "<br>";
$resultados = 'acreditado';
if ($resultados != 'acreditado' ) {
 echo "Usted a sido aceptado";
}
else {
echo "Usted no a sido aceptado";
}

echo "<br>";
echo "Ejemplos 2";
echo "<br>";
$promedio = 8;
if ($promedio = 9){
echo "Usted a sido acreditado en lamateria";
}
else {
echo "Usted esta en extra";
}
echo "<br>";
echo "Ejemplos 3";
echo "<br>";
$status = 'positivo';
if ($status = 'Negativo'){
echo "Usten no tiene la enfermedad";
}
else {
echo "Usted tiene la enfermedad";
}

//Ejemplos while PHP
echo "<br>";
echo "Ejemplos while PHP";
echo "<br>";
echo "<br>";
echo "Ejemplos 1";

$i=1;
while($i<=5)
{
    $j=1;
    while($j<=$i)
    {
      echo"w";
      $j++;     
    }
    echo"<br>";
    $i++;
}
echo "<br>";
echo "Ejemplos 2";


$costo = 100;
while ($costo<=110)
{
echo "A";
$costo++;
}
echo "<br>";
echo "Ejemplos 3";


echo "<br>";
echo "Ejemplos foreach PHP";
echo "<br>";
echo "Ejemplos 1";
$Dias = ['Lunes','Martes','Miercoles','Jueves','Viernes'];

foreach ($Dias as $Dia) {echo "<br>";
    echo "Ejemplos 2";
    $acreditados =['Anahi','Paola','Sarai'];
    foreach ($acreditados as $prom){
     echo '<br>';
        echo '9'.$prom;
    }
    
    
    echo "<br>";
    echo "Ejemplos 3";
    $estado =['POSITIVO','negativo'];
    foreach($estado as $sali){
     echo '<br>';
        echo 'no puede salir'.$sali;
    }
    
    echo '<br>';
    echo 'Dia '.$Dia;
}

