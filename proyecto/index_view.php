
<?php 

$errores = '';
$enviado = false;

//Si hemos hecho clic sobre el botón de BUSCAR:
if (isset($_POST['submit'])) {
    //Guardaremos el valor asignado por el usuario de la id en la variable $id
    $codigo = $_POST['codigo'];
    //Error si no hay "codigo" seleccionada
    if (empty($codigo)) {
        $errores .= 'Por favor selecciona un c�digo';
    }
    //Si han dado una codigo, cambiamos el $enviado a true, es decir, se enviará el formulario 
    if(!$errores){
        $enviado = true;
    }
}

require 'index_view.php';

//A partir del envio del formulario, se conecta y envia  a la base de datos esa ID
if ($enviado){
    //Conexión PDO a BBDD
    try {
        
        $conexion = new PDO('mysql:host=localhost;dbname=proyectopokedex', 'root', '');	
        //echo "Conexión OK";

    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    //Buscar datos del formulario "READ" SQL
    $statement = $conexion->prepare('SELECT * FROM pokedex WHERE id = :codigo');
    $statement->execute(
        array(':codigo'=> $codigo)
    );

    //Otro paquete de informaci�n en un array del registro de la ID seleccionada por el formulario
    $resultados = $statement->fetch();
    
    //Como mostramos los datos
    if($resultados){
        echo "<p class='resultado'> Resultado de la búsqueda:</br> ";
        echo "ID:" . $resultados['id'] . ' </br> ' . "POKEMON:" .$resultados['pokemon']. ' </br> ' . "TIPO:" .$resultados['tipo']. ' </br> ' . "PS:" .$resultados['ps'].' </br> '. "PESO:" . $resultados['peso'];
        echo "</p>";
    } 
    //Si no hay datos en la tabla cliente
    else {
        echo "<p style='text-align:center' class='resultado'>No existe este POKEMON $codigo</p>";
    }

}






?>