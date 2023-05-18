<?php

    class Impressora {

        //Atributos
        private $tinta = true; //Boolean
        private $paper = true; //Boolean
        private $tamany; //String
        private $color = "negre"; //String

        //Métodos
        public function imprimeix($tinta, $paper, $tamany, $color) {
            // $this->tinta = $tinta; //SETTER opcional
            //Añadir el parámetro $color
            if ($tinta && $paper) {
                echo "Es pot imprimir en " . $tamany . ", en color " . $color;
            } else {
                echo "Falta tinta o paper";
            }
        }
        //Si tenemos un atributo private o protected debemos crear métodos SETTER y GETTER
        public function setTamany ($tamany) {
            $this->tamany = $tamany;
        }
        public function getTamany () {
            return $this->tamany;
        }
    }
    // Ejercicio 3B
    $semana = array("Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge");

    //Ej 4 incial ordenar array $semana
    sort($semana);
    //var_dump($semana); //Comprovar que se ha ordenado

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    
    <ul>
        <!-- Codi PHP del ejercicio 4 mostrar lista del array $semana ordenada-->
        <?php
            foreach ($semana as $dia) {
                echo "<li>" . $dia . "</li>";
            }
        ?> 
    </ul>
    <?php
    //Ejercicio 5A
        //Para mostrar "Es pot imprimir en DINA4, color negre"
        $hp = new Impressora(); //Instanciación del objeto de la class Impressora
        // Se utilizan los atributos y los métodos a través del objeto $hp
        //Con el uso del método
        $hp->imprimeix(true, true, "DINA4", "negre");
        echo "<br>";
        //Con el uso de los atributos por separado y concatenados porque son "public"
        // echo "Es pot imprimir en {$hp->tamany}, en color {$hp->color}";
        $hp->setTamany("DINA3");
        echo "Ahora el tamaño de papel es " . $hp->getTamany();
    ?>
</body>
</html>