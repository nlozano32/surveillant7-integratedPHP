<?php 
	
	include_once '../../../../conexion/conexion.php';

						$query = "select * from f9111";
															$result = pg_exec($conexion, $query);



															while ($champ = pg_fetch_row($result)) {
																/*  echo "Control: $champ[0]<br>";
																  echo "NotUse : $champ[1]<br>";
																  echo "Limit  : $champ[2]<br>";*/

																$gLimit = $champ[2];

															if(isset($_POST['limit'])){



																$query = "update f9111 set champ3 = '".$_POST['limit']."' where champ1 = '1';";
																

																$result = pg_exec($conexion, $query);


																//echo $query;
																//echo 'Update OK!!!';
																
															}

														}

	
	?>