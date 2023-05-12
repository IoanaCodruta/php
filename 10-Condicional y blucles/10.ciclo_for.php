<?php

// for($i = 0 ; $i <= 100 ; $i = $i + 5 ){
// 	echo $i . "<br />";
// }

### EJERCICIO
# Muestra el rango de númerois del 3 al 99, saltando de 3 en 3

// for($i = 3 ; $i <= 99 ; $i += 3 ){
// 	echo $i . "<br />";
// }

### EJERCICIO
# Muestra el rango de númerois del 3 al 99, saltando de 3 en 3, pero el 78 y el 39 no deben mostrarse

for($i = 99 ; $i >= 3 ; $i -= 3 ){
	if ($i ==78 or $i==39) {
		echo  "Aqui salto número <br />";
	} else {
		echo $i . "<br />";
	}
}

### EJERCICIO
# Muestra el rango de númerois del 3 al 99, saltando de 3 en 3, pero el 78 y el 39 no deben mostrarse pero con WHILE
$i=3;
while($i <= 99){
	if ($i ==36 or $i==75) {
		echo $i . "<br />Aqui salto número <br />";
		$i+=6;
	} else {
		echo $i . "<br />";
		$i+=3;
	}
	
}

?>