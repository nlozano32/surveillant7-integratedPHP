<?php

/*
--------------------------------------------------------
--------------------------------------------------------
Crud Output
--------------------------------------------------------
--------------------------------------------------------
*/

		$queryTableOutPut = "select * from f9221 order by champ1";
		$resultTableOutPut = pg_exec($conexion, $queryTableOutPut);

	
 	function search_outPut($outputSearch){

		$user = "damatex";
		$password = "a1s2d3";
		$dbname = "surveillant3";
		$port = "5432";
		$host = "192.168.0.65";

		$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

		$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());


			$queryOutPut = "select * from f9221 where champ1 ='".$outputSearch."'";

			$resultOutPut = pg_exec($conexion, $queryOutPut);

				while ($champOutPut = pg_fetch_row($resultOutPut))
						

						return($champOutPut[0]);

					
				}

				if(isset($_POST['upd_output'])){

					if(isset($_POST['sonde_outputH']) && isset($_POST['r_sonde_outputH'])){

						$sondeOutPut = $_POST['r_sonde_outputH'].$_POST['sonde_outputH'];
					

						if(count(search_outPut($sondeOutPut))===1){

								$queryOutPut= "update f9221 set champ2 ='".$_POST['description_output']."', champ3 = '".$_POST['activate_output']."', champ4 = '".$_POST['statistics_output']."', champ5 = '".$_POST['relay_output']."', champ6 = '".$_POST['module_output']."', champ7 = '".$_POST['port_output']."' where champ1 = '".$sondeOutPut."'";

								$result = pg_exec($conexion, $queryOutPut);


								echo "<script type='text/javascript'>
									alert('Update successfully');</script>";

								}else{

									echo "<script type='text/javascript'>alert('Imposible update! For add the database, use [ADD]')</script>";

									$description_output = $_POST['description_output'];
								}
							}
				}

				if(isset($_POST['add_output'])){

					if(isset($_POST['sonde_outputH']) && isset($_POST['r_sonde_outputH'])){

						$sondeOutPut = $_POST['r_sonde_outputH'].$_POST['sonde_outputH'];
				

						if(count(search_outPut($sondeOutPut))===0){

							
								$queryOutPut = "insert into f9221 values('".$sondeOutPut."','".$_POST['description_output']."','".$_POST['activate_output']."','".$_POST['statistics_output']."','".$_POST['relay_output']."','".$_POST['module_output']."','".$_POST['port_output']."')";

								$result = pg_exec($conexion, $queryOutPut);


								echo "<script type='text/javascript'>
									alert('Add successfully');</script>";



								}else{

									echo "<script type='text/javascript'>alert('Imposible add! For update the database, use [Update]')</script>";

									$description_output = $_POST['description_output'];
								}
							}
				}

				if(isset($_POST['del_output'])){

					if(isset($_POST['sonde_outputH']) && isset($_POST['r_sonde_outputH'])){

						$sondeOutPut = $_POST['r_sonde_outputH'].$_POST['sonde_outputH'];
						
						if(count(search_outPut($sondeOutPut))===1){

								$queryOutPut= "delete from f9221 
  												where champ1 = '".$sondeOutPut."'";


								$result = pg_exec($conexion, $queryOutPut);


								echo "<script type='text/javascript'>
									alert('Delete succesfully');</script>";

								}
							}
				}


/*
--------------------------------------------------------
--------------------------------------------------------
Crud Global limit
--------------------------------------------------------
--------------------------------------------------------
*/
	
										$query = "select * from f9111";

												$result = pg_exec($conexion, $query);


													while ($champ = pg_fetch_row($result)) 

														
															$gLimit = $champ[2];


															if(isset($_POST['limit'])){


																$gLimit = $_POST['limit'];


													if(isset($_POST['add_global_limit'])){
							
																echo "<script type='text/javascript'>alert('Imposible Add! For update to the database, use [Update]'); </script>";

															}else if(isset($_POST['Update_global_limit'])) {			

																$query = "update f9111 set champ3 = '".$gLimit."'where champ1 = '1'";
														

																$result = pg_exec($conexion, $query);

																echo '<script>console.log("Update successfully")</script>';
																echo "<script type='text/javascript'>
																alert('Update successfully');</script>";

																	}
													
													}			
																
										
					?>