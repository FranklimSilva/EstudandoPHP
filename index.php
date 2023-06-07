<?php

//Estudando PHP curso da DIO

	echo"Hello World!";

	$qntCursos = 30; //declaração de variavel em php
	$pagina = "php";

	echo "Temos $qntCursos cursos $pagina disponiveis";

	if($pagina === "php"){
		$qntCursos = 15;
		echo "<br>Temos $qntCursos cursos $pagina disponiveis";
	}
?>