

<head>
	<link rel="stylesheet" type="text/css" href="design.css">

	<style>


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


		img {
		opacity: 1.0;
		filter: alpha(opacity=40); /* For IE8 and earlier */
			}

		img:hover {
		opacity: 0.4;
		filter: alpha(opacity=100); /* For IE8 and earlier */
		}
		
		
		div.contentleft{
		background-color:#C6E5DD;
		text-align: left;
		}
			
		p.description{
		margin: 20px 250px 10px 250px;
		text-align:left;
		}
			
			
	</style>
</head>

<body>			
		<br><br><br>
	
		<div align="center">
			<font size="6" color="#e62e2e"><b>WHAT CAN WE DO FOR YOU, VOLUNTEER?</b></font><br>
			<p class="description"><i><b>Ayuda Pilipinas</b> gives you opportunity to help give back to the Philippines in the most meaningful way that you can. It can help you filter volunteer experiences to those that match you; what you care about, your skills and your location.<br><br>
			Check out our selection available volunteer opportunities for you! If you haven't found the right one just yet, don't fret! We add new and exciting opportunities from our various volunteer organization partners from different parts of the Philippines every day!</i><br><br>
			</p>
			<?php
				echo anchor('homepage/signupview','CLICK HERE TO GET STARTED',array('class'=>'normalButtonRed'));
			?>
			<br><br><br><br>
		</div>
	
		<table align="center" style="width: 100%;">
		<tr><td bgcolor="f2f2f2">
			<div align="center">
				<br><br><br>
				<font size="6" color="#2c345b"><b>HOW DO YOU VOLUNTEER WITH US?</b></font><br>
				<table align="center" width="900" height="400" cellpadding="50px">
					<tr>
						<td><b>Ask yourself what specific causes you really care about.</b><br>
				You can start by evaluating what causes mean the most to you,
				or what really tugs your heart strings.
						</td>
						<td><img src="<?php echo base_url('assets/images/Icons_and_Logos_Arrow_Left_Blue_and_Red.png'); ?>" width="50">&nbsp;&nbsp;&nbsp;
						</td>
						<td>
				<b>Evaluate your free time.</b><br> Determine how much time you're able to commit.
				is it once a week. Weekends, once a month? Pick a sustainable number!
						</td>
						<td>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/Icons_and_Logos_Arrow_Left_Blue_and_Red.png'); ?>" width="50">&nbsp;&nbsp;&nbsp;
						
						</td>
						<td>
				<b>Check Out our volunteer calendar and map!</b><br> Located at our homepage, you
				can select what volunteer opportunity fits your interests, location
				and schedule.
						</td>
						<td>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/Icons_and_Logos_Arrow_Diagonal_Right_Blue_and_Red.png'); ?>" width="50">&nbsp;&nbsp;&nbsp;
						
						</td>
						<td rowspan="2">
				<b>Sign Up!</b><br> Answer the form with all the details that our volunteer organization
				need to make sure you're the right fit for their volunteer opportunity
				
						</td>
					</tr>
					
					<tr>
						<td><b>Make time for another adventure</b><br>
				Don't let your volunteer experience end with a single try. Find Another volunteer
				opportunity and seize it. Make volunteering part of your life!
				</td>
				<td>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/Icons_and_Logos_Arrow_Right_Blue_and_Red.png'); ?>" width="50">&nbsp;&nbsp;&nbsp;
						
						</td>
				<td>
				<b>Share your story!</b><br>
				Send us photos and stories about your volunteering experience. Talk about it on social media.
				Get more friends to be involved!</td>
				<td>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/Icons_and_Logos_Arrow_Right_Blue_and_Red.png'); ?>" width="50">&nbsp;&nbsp;&nbsp;
						
						</td>
				<td>
				<b>Volunteer</b><br>
				Wear the appropriate attire. bring the right equipment. your enthusiasm
				a few friends and a smile! Show up on tuime and give it your best!
				</td>
				<td>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/Icons_and_Logos_Arrow_Diagonal_Left_Blue_and_Red.png'); ?>" width="50">&nbsp;&nbsp;&nbsp;
						
				</td>
					</tr>
				</table>
				<br><br>
		</div>
		</td></tr>
		</table>
	<div align="center">
	<br><br><br><br>
	<font size="6" color="#e62e2e"><b>WHY SHOULD YOU VOLUNTEER WITH US?</b></font><br>
	<p class="description">
	We do our best to connect socially conscious organizations providing volunteer opportunities and the people who truly care about their cause and want to contribute their skills to them. We want to engage you with volunteering with the things that matter to you as often as possible. We do this by helping you schedule them into not just seasonal holidays but on ordinary weekends of the year. We make it easier for volunteerism to be a way of life!<br><br>
	</p><?php
			echo anchor('homepage/signupview','CLICK HERE TO GET STARTED',array('class'=>'normalButtonRed'));
		?>
	
	</div>
		
	<br><br><br><br>
	
	<div class="contentleft">
	
	<br><br><br><br>
	
	<div align="center">
	<font size="6" color="#e62e2e"><b>VOLUNTEERING STORIES</b></font><br><br>
	</div>
	
	<table align="center" width="800" cellspacing="10">
				<tr>
					<td cellspacing="30"><img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="200"></td>
					<td><b><?php echo $viewStory['firstname'];?> <?php echo $viewStory['lastname'];?></b><br>
					<p align="justify">
					<i>
					<br>"<?php echo $story['description'];?>"</i></p></td>
				</tr>
				
				
				<?php //echo $profile['firstname'] . ' ' . $profile['lastname'];?>
	
				<tr>
					<td colspan="2" align="center"><br>
						<?php
			echo anchor('homepage/login','CLICK HERE TO READ MORE VOLUNTEER STORIES',array('class'=>'normalButtonBlue'));
		?>
					</td>
				</tr>
	
			</table>
	
	
	<br><br>
	</div>



</body>

<br>
