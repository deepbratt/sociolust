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
					<div class="row">
						<?php
							for($i=1; $i <= 3; $i++){
						?>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="thumbnail bord-rad">
								<div class="col-md-2" style="padding:0px;margin:0px;">
									<img alt="Bootstrap Thumbnail First" src="uploads/26219167_1580311485385521_8938737836320191600_n.jpg" style="height:100px;border-radius:50%;padding:0px;">
								</div>
								<div class="col-md-8" style="padding:0px;margin:0px;">
									<label>Himadri Majumder</label>
									<p  style="height:100%;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								</div>
								<div class="col-md-2" style="padding:0px;text-align:right">
									<label><?php echo date("d M y");?></label>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</div>
						<?php
						 }
						?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<textarea class="form-control" placeholder="Enter your message here" style="height:100px;"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php
		include("footer.php");
	?>
  </body>
</html>