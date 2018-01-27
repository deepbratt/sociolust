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
					
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="thumbnail bord-rad">
								<div class="col-md-12" style="padding:0px;margin:0px;">
									<textarea class="form-control"  style="height:100px;" placeholder="Write something here..."></textarea>
								</div>
								<div class="col-md-12" style="padding:0px;">
									<input class="btn btn-default" type="button" value="Post Status">
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					

					<?php
						for($i=1; $i < 10; $i++){
					?>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-3 ">
								<div class="thumbnail bord-rad">
									<div class="col-md-12" style="padding:0px;margin:0px;">
										<img class="image_style" src="uploads/26219167_1580311485385521_8938737836320191600_n.jpg" style="width:100%;">
										<div class="overlay">
											<h3 style="color:#fff;font-weight:bold;margin:5px;">Himadri Majumder</h3>
										</div>
									</div>

									<div class="col-md-12 center" style="height:40px;padding:10px;">
										<a href=""><i class="fa fa-comments size_icon" aria-hidden="true" style="color:#ffcc33"></i> Send Message </a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

							<div class="col-md-9 col-sm-9 col-xs-9 ">
								<div class="thumbnail bord-rad">
									<div class="col-md-12" style="padding:0px;margin:0px;">
										<img class="image_style" src="uploads/26219167_1580311485385521_8938737836320191600_n.jpg" style="width:100%;">
										<div class="overlay">
											<h3 style="color:#fff;font-weight:bold;margin:5px;">Himadri Majumder</h3>
										</div>
										
										

									</div>
									<div class="col-md-12 center" style="height:40px;padding:10px;">
										<a href=""><i class="fa fa-comments size_icon" aria-hidden="true" style="color:#ffcc33"></i> Send Message </a>
									</div>
									<div class="clearfix"></div>
								</div>
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