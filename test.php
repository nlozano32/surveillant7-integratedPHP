<?php

$user = "damatex";
		$password = "a1s2d3";
		$dbname = "surveillant3";
		$port = "5432";
		$host = "192.168.0.65";

		$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

		$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());


if(isset($_GET['searchO'])){

					$queryTableOutPutVar = "select * from f9221 where champ1 ='".$_GET['searchO']."'";

					echo'<script>console.log("*******--------------***E**///////////'.$queryTableOutPutVar.'")</script>';

					$resultOutPutVar = pg_exec($conexion, $queryTableOutPutVar);

												 	
					$champOutPutVar =	pg_fetch_row($resultOutPutVar); 

					$sonde_output_r = substr($champOutPutVar[0],1,-1);

					echo $sonde_output_r;

 			
 					}else{

 						echo "*************searchOutput empty";

 					}

 	?>