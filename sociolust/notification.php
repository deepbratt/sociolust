<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SOCIOLUST </title>
	<?php

		include("metalinks.php");
	?>
</head>
<body>
  <?php
	include("header.php");
  ?>

  <div class="container contpad">
	   <div class="row">
			<div class="col-md-12">
					<div class="row" style="margin-top:25px;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Notifications</label>
						</div>
						<?php
						for($i=1; $i < 10; $i++){
						?>
						
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="thumbnail bord-rad">
								 
									<div class="col-md-2 col-sm-2 col-xs-2" style="padding:0px;margin:0px;">
										<img alt="Bootstrap Thumbnail First" src="images/port_logo.png" style="height:50px;border-radius:50%;padding:5px;">
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8" style="padding:0px;margin:0px;">
										 <a href="full_notification.php"><label>Check out the app of the day</label></a>
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2" style="padding:0px;">
										<label><?php echo date("d M y");?></label>
									</div>
								  
									<div class="clearfix"></div>
								</div>
							</div>

						<?php
						}
						?>
					</div>
			</div>
		</div>
	</div>
	
	<?php
		include("footer.php");
	?>
  </body>
</html>