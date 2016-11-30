<?php 
	
	include_once '../../../../conexion/conexion.php';
	include_once '../../../../modules/surveillantCrud.php';


		

			if(isset($_GET['searchO'])){

					$queryTableOutPutVar = "select * from f9221 where champ1 ='".$_GET['searchO']."'";

					echo'<script>console.log("*******--------------***E**///////////'.$queryTableOutPutVar.'")</script>';

					$resultOutPutVar = pg_exec($conexion, $queryTableOutPutVar);

												 	
					$champOutPutVar =	pg_fetch_row($resultOutPutVar); 

					$sonde_output_r = substr($champOutPutVar[0],1,-1);

					echo "<script>console.log('---------------".$sonde_output_r."')</script>";

 			
 					}else{

 						echo "<script>console.log('*************searchOutput empty')</script>";

 					}


			
	?>

<script type='text/javascript'>

	var valuePort = "X";
	var valueModule = "XX";
	var valueRelay  = "X";

	$(document).ready(function () {


    	$("#relay_output").keyup(function () {	

    		valueRelay = $("#relay_output").val();

		    if(valueModule<=9){

		        	
					$("#sonde_output").val(valuePort+"0"+valueModule+valueRelay);
					$("#sonde_outputH").val(valuePort+"0"+valueModule+valueRelay);


		        }else{

		        	
					$("#sonde_output").val(valuePort+valueModule+valueRelay);
					$("#sonde_outputH").val(valuePort+valueModule+valueRelay);
		        }

		 }); 

    	$("#port_output").keyup(function () {

    		valuePort = $("#port_output").val();
		    
		    if(valueModule<=9){

		        	
					$("#sonde_output").val(valuePort+"0"+valueModule+valueRelay);
					$("#sonde_outputH").val(valuePort+"0"+valueModule+valueRelay);

		        }else{

		        	
					$("#sonde_output").val(valuePort+valueModule+valueRelay);
					$("#sonde_outputH").val(valuePort+valueModule+valueRelay);
		        }

		 });

    	$("#module_output").keyup(function () {	

		        valueModule = $("#module_output").val();

		        if(valueModule<=9){

		        
					$("#sonde_output").val(valuePort+"0"+valueModule+valueRelay);
					$("#sonde_outputH").val(valuePort+"0"+valueModule+valueRelay);

		        }else{

		       
					$("#sonde_output").val(valuePort+valueModule+valueRelay);
					$("#sonde_outputH").val(valuePort+valueModule+valueRelay);
		        }
				
		        

		  	});

    	});
	

</script>

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Output</h3>
						
					</div>

				</div>
				<!-- /Page Header -->

				<!--=== Page Content ===-->


				<!--=== Blue Chart ===-->

<!--=== Page Content ===-->
				<div class="row">
					<!--=== Horizontal Forms ===-->
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Output management</h4>
							</div>
							<div class="widget-content">
								
								<form class="form-horizontal row-border" id="validate-4" method="post"  action=<?php $_PHP_SELF ?> >

										<div class="form-group">

										<div class="row">
												<label class="col-md-2 control-label">Output No.</label>
												<div class="col-md-1">
													<input type="text" class="form-control input-width-mini" value = "R" name="r_sonde_output" id = "r_sonde_output" disabled="true">
													<input type="hidden" class="form-control input-width-mini" value = "R" name="r_sonde_outputH" id = "r_sonde_outputH" >
													<span class="help-block"></span>
												</div>
												<div class="col-md-1">
													<input type="text" class="form-control input-width-mini" placeholder="XXXX" maxlength="4" name="sonde_output" id="sonde_output" disabled="disabled" maxlength="4" disabled="true" data-toggle="modal" data-target="#search">

													<input type="hidden" class="form-control input-width-mini" name="sonde_outputH" id = "sonde_outputH" value = '<?php
                                                                                $sonde_outputH = "XXXX";
                                                                                if (isset($_POST['sonde_outputH'])) {
                                                                                    $sonde_outputH = $_POST['sonde_outputH'];
                                                                                    echo $sonde_outputH;
                                                                                } else {
                                                                                    echo $sonde_outputH;
                                                                                }
													?>'>
													<span class="help-block"></span>

												</div>
												<label class="col-md-2 control-label">Description</label>
												<div class="col-md-4">
													<input type="text" class="form-control" name="description_output" id ="description_output" value = <?php if(isset($description_output)) echo $description_output; else echo ''?>>
												</div>	
										</div>
										</br>
										<div class="row">
										<label class="col-md-2 control-label">Active</label>
										<div class="col-md-1">
											 <select class="form-control" name="activate_output" id = "activate_output">
														<option value='<?php
                                                                                $activate_output = "O";
                                                                                if (isset($_POST['activate_output'])) {
                                                                                    $activate_output = $_POST['activate_output'];
                                                                                    echo $activate_output;
                                                                                } else {
                                                                                    echo $activate_output;
                                                                                }
															?>'>YES</option>
														<option value='<?php
                                                                                $activate_output = "N";
                                                                                if (isset($_POST['activate_output'])) {
                                                                                    $activate_output = $_POST['activate_output'];
                                                                                    echo $activate_output;
                                                                                } else {
                                                                                    echo $activate_output;
                                                                                }
															?>'>NO</option>
													</select>
										</div>
										<label class="col-md-3 control-label">Statistics</label>
										<div class="col-md-1">
												 <select class="form-control" name="statistics_output" id = "statistics_output">
														<option value='<?php
                                                                                $statistics_output = "O";
                                                                                if (isset($_POST['statistics_output'])) {
                                                                                    $statistics_output = $_POST['statistics_output'];
                                                                                    echo $statistics_output;
                                                                                } else {
                                                                                    echo $statistics_output;
                                                                                }
															?>'>YES</option>
														<option value='<?php
                                                                                $statistics_output = "N";
                                                                                if (isset($_POST['statistics_output'])) {
                                                                                    $statistics_output = $_POST['statistics_output'];
                                                                                    echo $statistics_output;
                                                                                } else {
                                                                                    echo $statistics_output;
                                                                                }
															?>'>NO</option>
													</select>
											</div>
										</div>
									</div>
									</br>
									<div class="row">
									<label class="col-md-2 control-label">Port</label>
												<div class="col-md-2">
													<input type="text" name="port_output" id = "port_output" class="form-control input-width-mini" maxlength="1" value='<?php
                                                                                $port_output = "X";
                                                                                if (isset($_POST['port_output'])) {
                                                                                    $port_output = $_POST['port_output'];
                                                                                    echo $port_output;
                                                                                } else {
                                                                                    echo $port_output;
                                                                                }
															?>'><span class="help-block" ></span>
												</div>
									</div>
									</br>
									<div class="row">
									<label class="col-md-2 control-label">Module No.</label>
												<div class="col-md-2">
													<input type="text" name="module_output" id = "module_output" class="form-control input-width-mini" maxlength="2" 
													value = '<?php
                                                                                $module_output = "XX";
                                                                                if (isset($_POST['module_output'])) {
                                                                                    $module_output = $_POST['module_output'];
                                                                                    echo $module_output;
                                                                                } else {
                                                                                    echo $module_output;
                                                                                }
															?>'><span class="help-block"></span>
												</div>
									</div>
									</br>
									<div class="row">
									<label class="col-md-2 control-label">Relay No.</label>
												<div class="col-md-2">
													<input type="text" name="relay_output" id = "relay_output" class="form-control input-width-mini" maxlength="1" value = '<?php
                                                                                $relay_output = "X";
                                                                                if (isset($_POST['relay_output'])) {
                                                                                    $relay_output = $_POST['relay_output'];
                                                                                    echo $relay_output;
                                                                                } else {
                                                                                    echo $relay_output;
                                                                                }
															?>'><span class="help-block"></span>
												</div>
									</div>
									<div class="form-actions">

											<!--<input type="button" value="Delete" class="btn btn-primary pull-right" name="del_output" id="del_output">-->
											<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#delete"> Delete </button>

											<input type="submit" class="btn btn-primary pull-right" formmethod="post" formaction="#output" value="Add"  name="add_output" id="add_output">

											<input type="submit" value="Update" class="btn btn-primary pull-right" name="upd_output" id="upd_output">

											<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#search"> Search </button>

																						  <!-- Modal -->

			<div class="modal fade" id="delete" role="dialog">
    			<div class="modal-dialog">
    
      				<!-- Modal content-->
      				<div class="modal-content">
      				 	<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title"> Delete output</h4>
        				</div>
        					<div class="modal-body">

        					Are you sure than you want to delete?

        					</div>

        					 <div class="modal-footer">
        					 	<button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Cancel</button>
        					 	<input type="submit" value="Delete" class="btn btn-primary pull-right" name="del_output" id="del_output">
          						
        					</div>

      				</div>
      			</div>
      		</div>

				
				<!-- /Responsive DataTable -->

        </div>
      
      </div>
      
    </div>
  </div>

										</div>
									</div>



									
								</form>

									<form class="form-horizontal row-border" id="validate-5"  action= <?php $_PHP_SELF ?> method="GET" >


									<div class="modal fade" id="search" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="icon-search"></i> Search window</h4>
        </div>
        <div class="modal-body">

       
					<div class="col-md-16">
					

							<div class="widget-content no-padding">
							
								<script>
					                    $(document).ready( function () {
					                      $('#output_table').bdt();
					                      });
					                    </script>

								<table class="table table-hover" id = 'output_table'>

								<tbody>

								<?php

								 	while ($champOutTablePut = pg_fetch_row($resultTableOutPut)){
						

												echo "<tr><td><button type='submit' formmethod='post' formaction='#output?searchO=".$champOutTablePut[0]."'>".$champOutTablePut[0]."</button></td>
													      <td>".$champOutTablePut[1]."</td>
											
													</tr>";
	
											}

										?>

									</tbody>
								
								</table>
								
							</div>

							 
        				</div>
					
					</div>


				<div class="modal-footer">
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          		</div>


				</div>


				</div>

				</form>

								<script>

										$( "#validate-4" ).validate({
	
	  										rules: {

	    										description_output: {
      												required: true,
    
    												},


	    										port_output: {
      												required: true,
      												digits: true,
    
    												},

    											module_output: {
      												required: true,
      												range: [0,31],
      												digits: true,
      												
    												},

    											relay_output: {
      												required: true,
      												range: [0,8],
      												digits: true,
      												
    												},


    											},
    											messages: {

    												description_output: {

      												required: " <div class='alert alert-danger fade in'> <strong>Please fill description field</strong></div>",
      												
    												},

    												port_output: {

      												required: " <div class='alert alert-danger fade in'> <strong>Please fill port field</strong></div>",
      												digits: "<div class='alert alert-danger fade in'><strong>Port field Error: invalid charactere(s)</strong></div>",
      												
    												},

    												module_output: {

      												required: " <div class='alert alert-danger fade in'> <strong>Please fill module field</strong></div>",
      												range: "<div class='alert alert-danger fade in'> <strong>Module field Error: Module Error limit (0 @ 31)</strong></div>",
      												digits: "<div class='alert alert-danger fade in'><strong>Module field Error: invalid charactere(s)</strong></div>",

      												
    												},

    												relay_output: {

      												required: " <div class='alert alert-danger fade in'> <strong>Please fill relay field</strong></div>",
      												range: "<div class='alert alert-danger fade in'> <strong>Relay field Error: relay Error limit (0 @ 8)</strong></div>",
      												digits: "<div class='alert alert-danger fade in'><strong>Relay field Error: invalid charactere(s)</strong></div>",

      												
    												},


    											},
    											 errorPlacement: function (error, element) {
										            jAlert(error.text());
										        }
    											
										});


								</script>

							</div>
						</div>
					</div>
					<!-- /Horizontal Forms -->
