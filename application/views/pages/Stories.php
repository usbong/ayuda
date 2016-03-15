

<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" href="css/boostrap.css">
	<link rel="stylesheet" href="css/boostrap.min.css">
	<link rel="stylesheet" href="css/boostrap-theme.css">
	<style>
		img {
		opacity: 1.0;
		filter: alpha(opacity=40); /* For IE8 and earlier */
			}

		img:hover {
		opacity: 0.4;
		filter: alpha(opacity=100); /* For IE8 and earlier */
		}
		div.box{
			border: 2px solid black;
		}


			.normalButtonRed {
			background-color:#e62e2e;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:20px 33px;
			text-decoration:none;
			text-shadow:0px 1px 0px #e62e2e;
			}

			.normalButtonRed:hover {
			background-color:#f01d1d;
			}

			.normalButtonRed:active {
			position:relative;
			top:1px;
			}

			.normalButtonBlue {
			background-color:#2c345b;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:20px 33px;
			text-decoration:none;
			text-shadow:0px 1px 0px #5b8a3c;
			}


			.normalButtonBlue:hover {
			background-color:#2c3a78;
			}


			.normalButtonBlue:active {
			position:relative;
			top:1px;
			}

			.redShortButton {
			background-color:#e62e2e;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:18px 10px;
			text-decoration:none;
			text-shadow:0px 1px 0px #5b8a3c;
			}
		
		
		
	</style>
</head>

<body>
	<br>
	<br>
	<br>
	
		<div class="col-md-2" >
		</div>
		<div class="col-md-8">
		<font color="red">
		<h2 align="center"><b>WE LOVE HEARING ABOUT YOUR STORIES!</b></h2></font>
		<h5><i> We definitely get excited every time we hear about a great experience volunteering or creating volunteer opportunities! At the heart
of <b>Ayuda Pilipinas</b> is a passionate community of nation builders, fighting for a better Philippines one cause at a time. You can hear
from a few of them here so you can psych yourself up for your next volunteer opportunity, or simply find a little joy in knowing there
are amazing people like them in your midst!If you have a great volunteer story to tell, send it to us and you might be featured here! </i></h5>
		</div>
		<div class="col-md-2">
		</div>		
		<div class="col-md-12" align="center">
		<br>
		<?php
			echo anchor('homepage/loginview','CLICK HERE TO SUBMIT A STORY',array('class'=>'normalButtonRed'));
		?>
		<br><br><br><br>
		</div>
	
	
	
<div class="col-md-12" align="center" >
	<div class="col-md-2"> </div>
	
	<div class="col-md-4" style="background-color:#c6e5dd;border-radius:25px;"><br>
	<table width="300">
	<tr>
	<td>
		<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">&nbsp;&nbsp;&nbsp;&nbsp;</td>
		
		<td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?><br>
			<b>Age:</b>&nbsp;<br>
			<b>Location:</b>&nbsp;<br>
			<b>Organization Volunteered For:</b>&nbsp;<br>
	
	</td></tr><tr><td colspan="2"><br>
		<h5><i><?php echo $story['description']; ?></h5></i><br>
	<br></td></tr></table>
	</div>
	<div class="col-md-1"> </div>
	<div class="col-md-4" style="background-color:#c6e5dd;border-radius:25px;"><br>
	
	<table width="300">
	<tr>
	<td>
		<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">&nbsp;&nbsp;&nbsp;&nbsp;</td>
		
		<td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?><br>
			<b>Age:</b>&nbsp;<br>
			<b>Location:</b>&nbsp;<br>
			<b>Organization Volunteered For:</b>&nbsp;<br>
	
	</td></tr><tr><td colspan="2"><br>
		<h5><i><?php echo $story['description']; ?></h5></i><br>
	<br></td></tr></table>
	</div>
	
	<div class="col-md-1"> </div>
	</div>
	
	
	
	
	
	
	
	
	
	<div class="col-md-12" align="center" >
	<div class="col-md-2"> </div>
	
	<div class="col-md-4"><br>
	
	</div>
	<div class="col-md-1"> </div>
	<div class="col-md-4"><br>
	
	
	</div>
	
	<div class="col-md-1"> </div>
	</div>
	
	
	
	
	<div class="col-md-12" align="center" >
	<div class="col-md-2"> </div>
	
	<div class="col-md-4" style="background-color:#c6e5dd;border-radius:25px;"><br>
	<table width="300">
	<tr>
	<td>
		<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">&nbsp;&nbsp;&nbsp;&nbsp;</td>
		
		<td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?><br>
			<b>Age:</b>&nbsp;<br>
			<b>Location:</b>&nbsp;<br>
			<b>Organization Volunteered For:</b>&nbsp;<br>
	
	</td></tr><tr><td colspan="2"><br>
		<h5><i><?php echo $story['description']; ?></h5></i><br>
	<br></td></tr></table></div>
	<div class="col-md-1"> </div>
	<div class="col-md-4" style="background-color:#c6e5dd;border-radius:25px;"><br>
	
	<table width="300">
	<tr>
	<td>
		<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">&nbsp;&nbsp;&nbsp;&nbsp;</td>
		
		<td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?><br>
			<b>Age:</b>&nbsp;<br>
			<b>Location:</b>&nbsp;<br>
			<b>Organization Volunteered For:</b>&nbsp;<br>
	
	</td></tr><tr><td colspan="2"><br>
		<h5><i><?php echo $story['description']; ?></h5></i><br>
	<br></td></tr></table>
	</div>
	
	<div class="col-md-1"> </div>
	</div>
		
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br><br>
<br><br><br><br>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
	

</body>

<br>