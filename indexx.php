<h1>Hola quetal esto es una etiqueta html</h1>
<h1>Para que funcione php tengo que poner la extención al archivo</h1>
<?php
    #Este comentario no se verá en la inspección
    echo "<h1>Código php</h1>";
    print("hola");
    //Este otro tipo de comentario tampoco se verá en la inspección

    /*
        Dentro se puden poner muchas lineas de comentario
        Esta muy loca esta situación
    */
    echo "<!--Comentario HTMl que si aparece en la inspeccion de elementos-->";
    # Variables
    #Los textos se gurdan siempre entre comillas y los números sin comillas
    $texto = "Repaso PHP guardado en variable ";
    $numero = 187;
    # Imprimir la variable concatenada 
        #siempre se concatena con el punto
    echo "<h1>".$texto.", un número almacenado es ".$numero."</h1>";

    #variable dentro de otra variable
    $texto1 = "Juanito";
    $texto2 = "El corrido de $texto1";
    echo "<h1>".$texto2."</h1>";

    #se puede guardar el texto todo en una sola variable
    $textofinal = "<h1>".$texto2."</h1>";
    echo $textofinal;
    #como sustituir el valor de una variable 
    $textofinal = "pues te lo he cambiado";
    echo $textofinal;

    echo "<hr>";//Salto de linea como división 
    # variables por GET


    #condiciones operadores logicos, no es recomndable pero de está manera se puede hacer
    if($numero >= 190){
        echo '<h3 style="background:green; ">Eres un persona alta</h3>';
    }else{
        echo '<h3>Eres un persona chaparra</h3>';
    }

    #Asignar nombre preedefinido en caso de que no tuviera
    $nombre = comprobarNombre();//asigno la varible para que exista
    echo $nombre;

    #Funciones
    function comprobarNombre(){
        if(isset($_GET["nombre"])){
            $nombre = $_GET["nombre"];
        }else{
            $nombre = "Victor";
        }
        #para siempre exista la variable
        return $nombre;
    }
    # Arrays (Colexiones de datos)
    $personas = ["Víctor", "Fran", "Paco", "Juanito"];
    echo $personas[1];

    #Bucle //las etiquetas html deberían estar fuera
    
?>

<h1>Listado</h1>
<ul>
    <?php
        foreach ($personas as $nombre){
            echo "<li>$nombre</li>";
        }
    ?>

</ul>
