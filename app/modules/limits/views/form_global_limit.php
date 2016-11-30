<?php 
	
	include_once '../../../../conexion/conexion.php';
	include_once '../../../../modules/surveillantCrud.php';

	?>


				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Limit</h3>
						<!--<span>Good morning, Nancy!</span>-->
					</div>

				</div>
				<!-- /Page Header -->

				<!--=== Page Content ===-->


				<!--=== Blue Chart ===-->

<!--=== Page Content ===-->

    <!-- Top Navigation Bar -->

				<div class="row">
					<!--=== Horizontal Forms ===-->
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Global limit</h4>
							</div>
							<div class="widget-content">
								
								<form class="form-horizontal row-border" id="validate-4" method="post"  action="">

										<div class="form-group">

										<div class="row">

												<label class="col-md-4 control-label">limit</label>
													<div class="col-md-2">
														<div class="col-md-10">
														<input  type="text" name="limit" id="limit" class="form-control" value = <?php  if(isset($gLimit)) echo $gLimit; else echo''; ?>
															>	

													</div>

											</div>
											</br>
											<div class="row">
												<h3 class="col-md-12"><p align="center" style="font-size: small">Global limit is used to control the maximum allowable opening of all ventilation panels of the site.</p>
										</h3>
											</div>

											<?php
													
	
													pg_close($conexion);

											?>

										</div>
											
	
									</div>

											<div class="form-actions">

											
											<input type="submit" value="Add" class="btn btn-primary pull-right" name="add_global_limit" id="add_global_limit" >
											<input type="submit" value="Update" class="btn btn-primary pull-right" name="Update_global_limit" id = "Update_global_limit">
											
										</div>
									
									</div>
									
								</form>

								<script>

										$( "#validate-4" ).validate({
	
	  										rules: {

	    										limit: {
      												required: true,
      												range: [0,100],
      												digits: true,
      												
    												},

    											},
    											messages: {

    												limit: {

      												required: " <div class='alert alert-danger fade in'> <strong>Please enter the limit parameter</strong></div>",
      												range: "<div class='alert alert-danger fade in'> <strong>Error limit (0 @ 100)</strong></div>",
      												digits: "<div class='alert alert-danger fade in'><strong>Error: invalid charactere(s)</strong></div>",

      												
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
