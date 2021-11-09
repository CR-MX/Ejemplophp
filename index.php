#fuera del php no funciona
<br>
//esté tampoco pero br es salto de linea
<br>
<?php
#Dentro del php si funciona
/* Otro tipo de comentarios 
sirve para varias lineas */
print "Curso php <br>"; //Este es otro tipo de comentario
//Variables 
$nombre = "Carlos";// las comillas son strings
$edad = 24; // los datos numericos no van entre comillas
//El echo tiene un mejor funcionamiento en sistemas complejos
print "El nombre del usuario es " . $nombre . "<br>"; //concatenación
echo "El nombre es " . $nombre . " y tiene " . $edad . " años <br>";
echo $nombre, $edad;
//Condicionales, bucles, funciones
function dameDatos(){
    echo "<br>Esto es un mendaje de function";
}
dameDatos();
//incluye php desde fuera 
include "ejemploPhp1.php";
meEjecutoEnOtroFichero();

?>
<br> <h2>varible globales</h2>
<?php
$nombre="Carlos";//variable esterna
function dameNombre(){
    global $nombre;//accedemos s ala variable global
    $nombre ="hola minombre es ".$nombre;// damo el valor a la global
}

//include("otrosDatos.php");
dameNombre();
echo $nombre;
?>
<br> <h2>Variebles estaticas</h2>
<?php
//varianles estaticas
function incrementaVariable(){
        $contador = 0;// por esta varible se resetea
        $contador++;
        echo $contador . "<br>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
?>
<br> <h2>Variebles estaticas</h2>

<?php
    function incrementaVariable2(){
        static $contador2 = 0;// no se declara de nuevo
        $contador2++;
        echo $contador2 . "<br>";
    }
    incrementaVariable2();
    incrementaVariable2();
    incrementaVariable2();
    incrementaVariable2();
?>
<br> <h2>Strings</h2>
<style>
    .resaltar{
        color: #f00;
        font-weight:bold;
    
    }
</style>
<?php
//diferentes formas de declarar un string
    echo "<p class= 'resaltar'>Frace con stryle comillas</p>";
    echo "<p class= \"resaltar\">Frace con stryle barra invertida</p>";
?>
<br> <h2>Comparar strings</h2>
<?php
    $variable1 = "Casa";
    echo $variable1;
    echo "<br>";
    $variable2 = "CASA";
    echo $variable2; 
    echo "<br>";
    //comparaion de strings
    $resultado = strcmp($variable1,$variable2);
    echo "El resultado es " . $resultado;
    //devuelve  1 si no son iguales
    //devuelve 0 si son iguales
    echo "<br>";
    if($resultado){//inverso if(!$resultado) 
        echo "No coniciden";
    }else{
        echo "Coniciden";
    }
    ?>
<br> <h2>Operadores de comparación</h2>
<br>$var1 === $var2 v si son iguales y del mismo tipo  
<br>$var1 <> $var2 v si las 2 no son iguales y ademas no son del mismo tipo
<?php

    echo "<br>var1 = 'Juan'";
    echo "<br>var2 = 21";
    $var1 = "Juan";
    $var2 = 21;
    echo "<br> comparacion ===";
    if ($var1 === $var2) {
        echo "<br> son iguales y del mismo tipo";        
    }else{
        echo "<br> no son iguales ni del mismo tipo";        
    }
    echo "<br> comparacion <>";
    if ($var1 <> $var2){
        echo "<br>No son iguales ni del mismo tipo";
    }else{
        echo "<br>Son iguales y del mismo tipo";
    }
    
?>
<br> <h2>Boton submit</h2>
<form action = "validacion.php" method="post">
<input type="submit" name="enviado" id="enviado" value="Enviar">
</form>
<br> <h2>declaracion de constantes</h2>
<br><p>valor que no podra cambiar de valor durante la ejecución</p>
<?php
// elnombre da las mayusculas es asi por defecto
// obligatorio usar define
// son globlaes por defecto
// solo guardan valores escalares ejmplo array no, las varaibles primarias si
    define("AUTOR", "Carlos", TRUE);//true lo hace sensible a mayuscualas y minusculas
    echo AUTOR;
    echo "<br>";
    echo "El autor es " . AUTOR; 
    //forma de cambiar el valor
    //define("AUTOR", "Maria"); no sirve esta forma actualmente

?>
<h1>Constantes predefinidas </h1>
<?php
    echo "<br>";
    echo  "__LINE__ : ";
    echo __LINE__;
    echo "<br>";
    echo  "__FILE__ : ";
    echo __FILE__;
    echo "<br>";
    echo  "__DIR__ : ";
    echo __DIR__;
    echo "<br>";
    echo  "__FUNCTION__ : ";
    echo __FUNCTION__;
    echo "<br>";
    echo  "__CLASS__ : ";
    echo __CLASS__;
    echo "<br>";
    echo  "__TRAIT__ : ";
    echo __TRAIT__;
    echo "<br>";
    echo  "__METHOD__ : ";
    echo __METHOD__;
    echo "<br>";
    echo  "__NAMESPACE__ : ";
    echo __NAMESPACE__;
    // Son las que existen actualmente 
?>



