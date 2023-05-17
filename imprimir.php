<?php

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'); 
sort($semana);
class Impressora {
    public $tinta = true;
    public $paper = true;
    public $tamany ='DINA4';
    public $color = 'negre';

    public function __construct() {
        $this->imprimeix($this->tinta, $this->paper, $this->tamany);
    }
    public function imprimeix($tinta, $paper, $tamany){
        if ($tinta && $paper) {
            echo 'Se pueden imprimir en ' . $tamany . ', en color ' . $this->color;
        } else {
            echo 'Falta tinta o papel';
    } 
  }
}
$printer = new Impressora();
?>
<!-- 1.	Para mostrar un archivo PHP en nuestro navegador, podemos usar XAMPP, que es un paquete de software que incluye un servidor web Apache, un servidor de base de datos MySQL e int�rpretes para los lenguajes de programaci�n PHP y Perl. XAMPP permite a los desarrolladores crear un entorno de desarrollo local para ejecutar y probar aplicaciones web.
Para usar XAMPP, sigue estos pasos:
�	Descargamos e instalamos XAMPP desde el sitio web oficial.
�	Despu�s de la instalaci�n, iniciamos el Panel de control de XAMPP e iniciamos los servicios de Apache y MySQL.
�	En la carpeta de instalaci�n de XAMPP, en el directorio "htdocs", creamos una nueva carpeta para nuestro proyecto y copiamos el archivo PHP a esta carpeta.
�	Abrimos un navegador y escribimos la direcci�n "localhost/nombre_del_proyecto/archivo.php", donde "nombre_del_proyecto" es el nombre de la carpeta creada previamente y "archivo.php" es el nombre del archivo PHP que queremos mostrar.
�	El servidor Apache procesar� el archivo PHP y el resultado se mostrar� en el navegador. -->

 <!-- 2.	Para gestionar el control de versiones con tecnolog�a Git en nuestro ordenador, seguimos estos pasos:
�	Descargamos e instalamos Git desde el sitio web oficial del proyecto Git.
�	Abrimos una consola de comandos (Git Bash en Windows) y navegamos hasta el directorio del proyecto que queremos gestionar con Git.
�	Inicializamos un nuevo repositorio Git en el directorio del proyecto usando el comando "git init".
�	Agregamos los archivos del proyecto al �rea de ensayo usando el comando "git add <file_name>" o "git add". para agregar todos los archivos.
�	Hacemos un commit para guardar el estado actual del proyecto en el repositorio usando el comando "git commit -m 'mesaj_commit'".
 -->

<!-- 5.B Si los atributos de la clase Impressora se declararan como "privados" o "protegidos" en lugar de "p�blicos", no se podr�a acceder a ellos directamente fuera de la clase. Por lo tanto, la declaraci�n $impresora->imprimir($impresora->tinta, $impresora->papel, $impresora->tama�o); generar�a un error. Para acceder y modificar los atributos privados o protegidos de la clase, debe utilizar los m�todos de acceso p�blico (getter) y setter (setter) de estos atributos -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressio del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <ul>
    <?php
    foreach ($semana as $sem) {
        echo "<li>$sem</li>";
    }
    ?>
</ul>
</body>
</html>