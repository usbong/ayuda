<html>
<head>
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
		
			div {
				background-color:#ffffff;
			}

			.storiesSection {
				width:75%;
				border-radius:25px;
				background-color:#f2f2f2;
				padding: 20px 20px 20px 20px;
			}
			
		h2 {
				background-color:#ffffff;
		}
		
		p.description
		{
			margin: 20px 20px 10px 20px;
			padding-right: 20%;
			padding-left: 20%;
			text-align:center;
			font-size:15px;
		}

		
	</style>
</head>

<body>
	<br>
	<br>
	<br>
		<div align="center">
				<h2><font color="#e62e2e" size="6"><b>WE LOVE HEARING ABOUT YOUR STORIES!</b></font></h2>
		</div>
		<p class="description">
			<i> We definitely get excited every time we hear about a great experience volunteering or creating volunteer opportunities! At the heart
			of <b>Ayuda Pilipinas</b> is a passionate community of nation builders, fighting for a better Philippines one cause at a time. You can hear
			from a few of them here so you can psych yourself up for your next volunteer opportunity, or simply find a little joy in knowing there
			are amazing people like them in your midst!If you have a great volunteer story to tell, send it to us and you might be featured here! </i>
		</p>
		<br>
		<div align="center">
			<?php
				echo anchor('homepage/loginview','CLICK HERE TO SUBMIT A STORY',array('class'=>'normalButtonRed'));
			?>
		</div>
		<br><br>

		<div align="center">
			<table width="80%">
				<tr width="100%">
					<td align="center" width="50%">
						<div class="storiesSection">
						<table width="100%">
							<tr width="100%">
								<td width="30%">
									<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?></td></tr>
									<tr><td><b>Age:</b>&nbsp;</tr>
									<tr><td><b>Location:</b>&nbsp;</tr>
									<tr><td><b>Organization Volunteered For:</b>&nbsp;</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i><?php echo $story['description']; ?></i></h5><br><br>
								</td>
							</tr>
						</table>
						</div>
					</td>
					
					<td align="center" width="50%">
						<div class="storiesSection">
						<table width="100%">
							<tr width="100%">
								<td width="30%">
									<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?></td></tr>
									<tr><td><b>Age:</b>&nbsp;</tr>
									<tr><td><b>Location:</b>&nbsp;</tr>
									<tr><td><b>Organization Volunteered For:</b>&nbsp;</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i><?php echo $story['description']; ?></i></h5><br><br>
								</td>
							</tr>
						</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<br><br>
		<div align="center">
			<table width="80%">
				<tr width="100%">
					<td align="center" width="50%">
						<div class="storiesSection">
						<table width="100%">
							<tr width="100%">
								<td width="30%">
									<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?></td></tr>
									<tr><td><b>Age:</b>&nbsp;</tr>
									<tr><td><b>Location:</b>&nbsp;</tr>
									<tr><td><b>Organization Volunteered For:</b>&nbsp;</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i><?php echo $story['description']; ?></i></h5><br><br>
								</td>
							</tr>
						</table>
						</div>
					</td>
					
					<td align="center" width="50%">
						<div class="storiesSection">
						<table width="100%">
							<tr width="100%">
								<td width="30%">
									<img src="<?php echo base_url('assets/images/circle-black.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;<?php echo $story['firstname'];?> <?php echo $story['lastname'];?></td></tr>
									<tr><td><b>Age:</b>&nbsp;</tr>
									<tr><td><b>Location:</b>&nbsp;</tr>
									<tr><td><b>Organization Volunteered For:</b>&nbsp;</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i><?php echo $story['description']; ?></i></h5><br><br>
								</td>
							</tr>
						</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<br>
</body>
</html>
<div>