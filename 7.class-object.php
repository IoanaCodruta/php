<?php 
//Creamos la clase Profesor
    class Profesor {
        //PROPIEDADES del objeto

        //Atributos
        public $nombre = 'Marc';
        public $apellido = 'Esteve';
        public $altura = 1.75;
        public $materia = "Desarrollo web";
        //Modificadores de atributos/métodos "public/protected/private"
        //echo $nombre; //no funciona

        //Métodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
    
    $profesor1 = new Profesor();//Creamos OBJETO
    //echo gettype($profesor1); //Muestra tipo "object"
    echo 'El nombre del profesor es ' . $profesor1->nombre . ' ' . $profesor1->apellido . " con una altura de " . $profesor1->altura . 'm' . " que imparte la asignatura de " . $profesor1->materia . "<br>";
    $profesor1->hablar("Un cordial saludo");

    //EJERCICIO: Muestra también en el texto: "imparte Desarrollo Web"

    //Creamos un segundo OBJETO de la CLASS "Profesor"
    $profesor2 = new Profesor(); //Instancia
    $profesor2->nombre = "Juan"; // Asignaciones
    $profesor2->materia = "Inglés";
    echo "<br>";
    echo 'El nombre del profesor es ' . $profesor2->nombre . " e imparte la asingatura " . $profesor2->materia;
    $profesor2->hablar("<br>Buenas tardes");

?>