<?php 

$paises = array(
	'Mexico', 'Japón', 'China', 
	'Argentina', 'Marruecos', 'Tailandia'
);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach break-continue</title>
</head>
<body>
	<h1>Paises</h1>
	<?php 
		#Solo muestra China
        // foreach($paises as $pais){
		// 	if ($pais == 'China') {
		// 		echo $pais . '<br />'; 
		//  	} 
        // }

		#Muestra todos menos China
		// foreach($paises as $pais){
		// 	if ($pais == 'China') {
        //     	continue;
        //     }
		// 	echo $pais . '<br />';
        // }
		##Ese "continue" hace un salto en el recorrido del foreach

		#USO DEL BREAK
		// foreach($paises as $pais){
			
		// 	if ($pais == 'Tailandia') {
		// 		break;
		// 	}
		// 	echo $pais . '<br />';
			
		// }
		##Ese "break" finaliza foreach()
	?>
</body>
</html>