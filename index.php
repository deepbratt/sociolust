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
					for($i=1; $i < 10; $i++){
					?>
					
						<div class="col-md-3">
							<div class="thumbnail">
								<img alt="Bootstrap Thumbnail First" src="uploads/26219167_1580311485385521_8938737836320191600_n.jpg" style="height:150px;">
								<div class="caption">
									<p>
										Cr justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
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