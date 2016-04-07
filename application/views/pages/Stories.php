<html>
<link href='https://fonts.googleapis.com/css?family=Lato:400italic' rel='stylesheet' type='text/css'>
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

<body style="font-family: 'Lato', sans-serif;">
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
									<img src="<?php echo base_url('assets/images/Testimonials_Cheljohn Munieza.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;Cheljohn Munieza</td></tr>
									<tr><td><b>Age:</b>&nbsp;24</tr>
									<tr><td><b>Location:</b>&nbsp;Iloilo City</tr>
									<tr><td><b>Organization Volunteered For: CARA</b>&nbsp;</tr>		
									</i>							
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i>Dako gid ang pasalamat ko na nakakadto ako ako sa Ayuda na event. Sadya gid kag madamu akong nakilala na pareho gid ang amun mga cause na ginatulungan! (I'm incredibly thankful that I was able to go to an Ayuda event. It was so fun and I met a lot of great people who had the exact same causes they wanted to help as me!)</i></h5><br><br>
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
									<img src="<?php echo base_url('assets/images/Testimonials_AlexaSadorra.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;Alexa Sadorra</td></tr>
									<tr><td><b>Age:</b>&nbsp;19</tr>
									<tr><td><b>Location:</b>&nbsp;Davao City</tr>
									<tr><td><b>Organization Volunteered For:</b>&nbsp;CARA</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i>I never thought that I could meet so many young people who cared about Animal Welfare as much as I do in my own city! I think I've found the right kind of friends through Ayuda and I'm excited to meet more in the future!</i></h5><br><br>
								<br><br>
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
									<img src="<?php echo base_url('assets/images/Testimonials_MikeBaino.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;Mike Baino</td></tr>
									<tr><td><b>Age:</b>&nbsp;17</tr>
									<tr><td><b>Location:</b>&nbsp;Cagayan de Oro</tr>
									<tr><td><b>Organization Volunteered For:</b>&nbsp;Ephpheta Foundation for the Blind</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i>Gusto jud ko mag boluntar pero wala pa ko kakita ug usa ka cause na geh ganahan jd nako. Maayo nalang na tungod na Ayuda, nakitan nako ang lahi-lahi na cause na duol sa ako mao dali na dayon maka pili. Di ko kahulat kung unsay sunod na panghitabo sa akoang syodad! (I've always wanted to volunteer but I’ve never had a particular cause that I cared about more than any other. It was great that Ayuda let me see my options for different causes near me so it was easier to make a decision where to volunteer. I can't wait for the next local event in my city!)</i></h5><br><br>
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
									<img src="<?php echo base_url('assets/images/Testimonials_GabrielleLayug.png'); ?>" width="100">
								</td>	
								<td width="70%">
									<table>
									<i>
									<tr><td><b>Name:</b>&nbsp;Gabriel Layug</td></tr>
									<tr><td><b>Age:</b>&nbsp;20</tr>
									<tr><td><b>Location:</b>&nbsp;Quezon City</tr>
									<tr><td><b>Organization Volunteered For: Adarna Foundation</b>&nbsp;</tr>		
									</i>
									</table>
								</td>
							</tr>
							<tr width="100%">
								<td colspan="2"><br>
									<h5><i>Sobrang useful ng website! Di ko alam na sobra palang opportunidad na tumulong sa mga tao sa probinsya ng parents ko. First time ko pumunta sa Nueva Ecija at sobrang nakaconnect ako sa roots ko habang tumutulong sa pagturo sa mga bata. The website is so useful! I didn’t know that there were so many opportunities to help in my parent’s province. It’s the first time I went to Nueva Ecija and I super connected with my roots when I taught to the children!</i></h5><br><br>
								<br><br>
								</td>
							</tr>
						</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<br><br><br>><br>
</body>
</html>
<div>