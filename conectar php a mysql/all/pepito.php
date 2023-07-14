<?php 

try {
	 
    // Conexi�n BD Clientes
	$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

	// Consulta para CT07
	$statement = $conexion->prepare('SELECT * FROM clientes WHERE C�DIGOCLIENTE= :cc'); 
    
    $statement->execute(
            array(':cc'=> 'CT07')
    );
    
    $resultados = $statement->fetch(); //Muestra de uno en uno los registros
    // print_r($resultados); // Imprimir en pantalla los datos
    //echo "<br />";
    //Revisi�n de algunos campos
    echo $resultados['C�DIGOCLIENTE']. " - ". $resultados['EMPRESA']  . " - ". $resultados['DIRECCI�N'];

} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}
?>