<?php

	$dbconn = pg_connect("host=localhost port=5432 dbname=clima user=postgres password=2968239ms") or die('No se ha podido conectar: '.pg_last_error());
	$result = pg_query($dbconn, "SELECT * FROM usuarios");
	if (!$result) {
    	echo "Ocurrió un error.\n";
   	 exit;
	}else{
		echo "la consulta fue realizada con exito\n";
		echo "<br />\n";
	}

	while ($row = pg_fetch_row($result)) {
    	echo "\nusuario: $row[1]  \nPassword: $row[2]";
    	echo "<br />\n";
	}

?>
