<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ASIX-M09-Càlcul de Divisors</title>
</head>
<body>
    <h1>M09 ASIX</h1>
    <h2>BUCLES i CONDICIONALS PHP</h2>
	<p style="align:center">Script PHP que mostra una taula on s'indica si els nombres de la primera filera són divisibles pels nombres de la primera columna.</p>

	<?php
		$valor=5;  //creamos un variable y guardamos numero 5
		$n_inici=30; //mismo creamos variable y guardamos valor 
		$n_de_divisors=21; //mismo  
    
    
		echo ("<table border=\"1\">"); //creamos una tabla y tamaño de borde es 1
		for ($i=0; $i<11; $i=$i+1){ //creamos un bucle con for donde valor es 0, y esta que 0 es menos que 11 estara dentro de bucle 
			echo ("<tr>");//aquí está creando una fila
			if ($i==0){// si i es iqual que 0 
				for($j=-1; $j<$n_de_divisors; $j=$j+1){ //aquí está creando otro bucle donde j es -1 y hasta que j sea menor que 21 estará en el bucle
					if ($j==-1) {// si j es iqual que -1 as ecto 
						echo("<td bgcolor=\"#7777FF\"></td>"); // mostrar color en la pantalla
					}else{//es creando fila de 30 a 50
						echo("<td bgcolor=\"#CCAAFF\">");
						echo($j+$n_inici);
						echo("</td>");
					}
				}
			}else{ //si i es diferente de 0 es ingrese aquí
				echo("<td bgcolor=\"#CCAAFF\">"); //crear columna y mostrar color en la pantalla
				echo($i);//mostrar i en la pantalla
				echo("</td>"); //cerar columna 
				if($i%3==0){//cuando i se divide en 3 y se le da 0, así que muestre el color, de lo contrario, otro color
					$color="#FFDDAA";
				}else{
					$color="#EEE";
				}
				for($j=0; $j<$n_de_divisors; $j=$j+1){//otro bucle hasta que j sea menor que 21
					if( (($j+$n_inici)%$i)==0){//si j más 30 dividido en i da 0 pues muestre el color y * de lo contrario muestre el color y -
						echo ("<td bgcolor=\"$color\" >*</td>");
					}else{
						echo ("<td bgcolor=\"$color\" >-</td>");
					}
				}
			}
			echo("</tr>");
		}
		echo("</table>");//cerar tabla 
    
    while ($valor > 0){//otro bucle hasta que 5 sea mayor que 0
        echo "<p>Em queda per escriure $valor vegades la frase</p>"; 
        $valor--; //cada vez que se quita un número
    }
    
    if ($n_inici != 29) {echo "Es diferent";} // si 30 es diferente de 29 mostrar en pantalla es diferente lo contrario mostrar es igual
    else {echo "Es igual";}
	?>
</body>
</html>