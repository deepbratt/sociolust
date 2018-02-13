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

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #ff3333;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>
<body>
  <?php
	include("header.php");
  ?>

  <div class="container contpad">
	   <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row" style="margin-top:25px;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="thumbnail bord-rad">
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
									<label style="color:blue;font-weight:bold;">Upgrade to sociolust essential</label><hr/>
								</div>
									
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
										<label style="color:blue;font-weight:bold;">Sociolust Essential Options</label>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Send upto 10 "Love" per day</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Hide ads</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>

									<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
										<hr/><label style="color:blue;font-weight:bold;">Notifications</label>
										<p>If you deactivate your notifications, you will not be warned when you get "Love", a new message or a Crush.</p>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Love</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Crush</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Messages</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
										<hr/><label style="color:blue;font-weight:bold;">Connected Accounts</label>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Instagram</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<label>Facebook</label>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
											<label class="switch">
												<input type="checkbox" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
								<hr/>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-9 col-sm-9 col-xs-9">
											<label>Distance Units</label>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-3" style="">
											<select class="form-control">
												<option value="" selected disabled>Choose Distance</option>	
												<option value="auto">Automatic</option>	
												<option value="kms">Kilometers</option>
												<option value="mile">Miles</option>
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
									<hr/><label style="color:blue;font-weight:bold;">Terms of Service</label>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
									<hr/><label style="color:blue;font-weight:bold;">Privacy Policy</label>
								</div>
							
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
									<hr/><label style="color:blue;font-weight:bold;">Logout</label>
								</div>
								


								<div class="clearfix"></div>
							</div>
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