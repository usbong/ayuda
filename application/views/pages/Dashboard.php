<title>
	Dashboard
</title>

<head>
	<link rel="stylesheet" type="text/css" href="design.css">

	<style>

			.normalButtonBlue {
			background-color:#2c345b;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:10px 18px;
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


			.redShortButton {
			background-color:#f01d1d;
			}

		img {
		opacity: 1.0;
		filter: alpha(opacity=40); /* For IE8 and earlier */
			}

		img:hover {
		opacity: 0.4;
		filter: alpha(opacity=100); /* For IE8 and earlier */
		}
		
		hr {
    display: block;
    height: 3px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; 
}
			div.contentleft
			{
			background-color:#C6E5DD;
			text-align: left;
			}
			
				p.description
			{
				margin: 20px 250px 10px 250px;
				text-align:left;
			}
						
			#nav {
				
			width:350px;
			float:left;
			padding:10px;
margin: 20px 20px 20px 20px;	
text-align:center;		
			}
			
			div.volunteerOpportunities
			{
			margin: 20px 60px 0px 410px;
			text-align: left;
			background-color:#f2f2f2;
			padding: 20px 20px 20px 20px;
			}		
			
			table.no-spacing {
			  border-spacing:0; /* Removes the cell spacing via CSS */
			  border-collapse: collapse;  /* Optional - if you don't want to have double border where cells touch */
			}
	</style>
</head>

<body>	
		<br>

		<div align="center" style="margin-right: 200px">
			<font size="6" color="#e62e2e" style='text-transform: uppercase;'><b><?php if ($account['type']=='ngo') {echo 'WELCOME, ';} else {echo 'HI, ';} echo $account['firstname'];?>!</b></font>
		</div>
			<div align="right" style="margin-right: 80px">
				<i>Your linked accounts:</i>&nbsp;
				<a href id='modal-launcher' data-toggle="modal" data-target="#modalFacebook"><img src=" <?php echo base_url('assets/images/Icons and Logos_FB Icon (Blue).png');?>" width="40"></a>
				<a href id='modal-launcher' data-toggle="modal" data-target="#modalTwitter"><img src=" <?php echo base_url('assets/images/Icons and Logos_Twitter Icon (Blue).png');?>" width="40"></a>
				<a href id='modal-launcher' data-toggle="modal" data-target="#modalEmail"><img src=" <?php echo base_url('assets/images/Icons and Logos_Email Icon (Blue).png');?>" width="40"></a>
			</div>

				<div  id="nav">
				<br>
					<?php
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $account['profilePic']).'" width="250"/>';
					?>
					<br><b><?php echo $account['firstname'] . ' ' . $account['lastname'];?></B><br>
					<?php echo $account['description'];?> <br>
					
					<a id='modal-launcher' data-toggle="modal" data-target="#myModal">
					  <font size="2" color="red">Edit</font></a>
				</div>
				
				<br>		
				<?php if ($account['type']=='ngo') {
						echo '<table class="no-spacing" cellspacing="0">';
						echo '<tr>';
						echo '<td><img src="';echo base_url("assets/images/addEventIcon.png");echo '" width="180"></a></td>';
						echo '<td><img src="';echo base_url("assets/images/addBlogIcon.png");echo '" width="180"></a></td>';
						echo '<td><img src="';echo base_url("assets/images/yourStatisticsIcon.png");echo '" width="180"></a></td>';
						echo '<td><img src="';echo base_url("assets/images/volunteerFeedbackIcon.png");echo '" width="180"></a></td>';
						echo '</tr>';
						echo '<tr>';
						echo '<td valign="top"><center><b><font size="5">ADD EVENT</font></b></center></td>';
						echo '<td valign="top"><center><b><font size="5">ADD BLOG</font></b></center></td>';
						echo '<td valign="top"><center><b><font size="5">YOUR<br>STATISTICS</font></b></center></td>';
						echo '<td valign="top"><center><b><font size="5">VOLUNTEER<br>FEEDBACK</font></b></center></td>';
						echo '</tr>';
						echo '</table>';
					}
				?>
				<br>
						<b>YOUR UPCOMING VOLUNTEER OPPORTUNITIES</b>			
						<div class="volunteerOpportunities" style="border-radius: 25px;">
							<?php 
							$counter=0;
							foreach ($events as $row) {
							?>						
							<i>
							<table>
							<tr>
								<td>
									<img src=" <?php echo base_url('assets/images/Icons_and_Logos_Category_Icon_('.str_replace(' ','_',$category[$counter]['categoryName']).').png');?>" width="100">
								</td>
								<td>
									<b><?php echo strtoupper($row['eventname'])?></b><br>
									<?php echo $eventsOrganizerUsername[$counter];?>
								</td>
							</tr>
							</table>
							<table>
								<tr>
									<td width="4%"><img src=" <?php  echo base_url('assets/images/Icons and Logos_Personal Dash (Calendar).png');?>" width="40">
									</td>
									<td width="28%">
										&nbsp;<?php if ($row['dateStart']!=$row['dateEnd']) {
														echo date("F j, Y",strtotime($row['dateStart'])).'-<br>&nbsp;'.date("F j, Y",strtotime($row['dateEnd'])); 
													}
													else {
														echo date("F j, Y",strtotime($row['dateStart']));
													}
											?>
									</td>
									<td width="4%"><img src=" <?php  echo base_url('assets/images/Icons and Logos_Personal Dash (Time).png');?>" width="40">
									</td>
									<td width="28%">
										&nbsp;<?php echo substr($row['timeStart'],0,5); ?> - <?php echo substr($row['timeEnd'],0,5); ?>
									</td>
									<td width="4%"><img src=" <?php  echo base_url('assets/images/Icons and Logos_Personal Dash (Location).png');?>" width="40">							
									</td>
									<td width="28%">
										&nbsp;<?php echo $row['venue']?>, <?php echo $row['location']?>
									</td>
								</tr>
							</table>
							</i>
							<br>
							<br>
								<?php $counter++;}?>

							<div align="center">
							<button id='modal-launcher' class="normalButtonBlue" data-toggle="modal" data-target="#login-modal"><font size="2">CLICK HERE TO SEE MORE VOLUNTEER OPPORTUNITY</font></button>
							<br>
							</div>
							</div>			
<!--						
	<div  id="nav">
				
					<b>MESSAGES</b><br>
					<table>
						<tr>
							<td>Message
							</td>
						</tr>
						<tr>
							<td>Message
							</td>
						</tr>
						<tr>
							<td>Message
							</td>
						</tr>
						<tr>
							<td>Message
							</td>
						</tr>
						<tr>
							<td><input type="button" value="SEND MESSAGE">
							</td>
						</tr>
					
					</table>
	</div>
-->				
						<br><br>	
						<b>YOUR PAST VOLUNTEER EXPERIENCES</b>					
						<div class="volunteerOpportunities" style="border-radius: 25px;">
							<b>Session month year</b><br>
								<img src="<?php echo base_url('assets/images/icon1.png'); ?>" width="80">	&nbsp;&nbsp;
								<img src="<?php echo base_url('assets/images/icon2.png'); ?>" width="80">
							<br><br>
							<div align="center">
							<button id='modal-launcher' class="normalButtonBlue" data-toggle="modal" data-target="#login-modal"><font size="2">CLICK HERE TO SEND US YOUR VOLUNTEER STORY</font></button>
							<br>
							</div>

						</div>	
						
						<br><br>	
						<div style="margin-left: 620px;"><b>YOUR PERSONAL VOLUNTEER STATISTICS</b></div>
						<div class="volunteerOpportunities" style="border-radius: 25px;"> 
							<b>No. of people You've Helped:</b> 1,034<br>
							<b>Top Personal Causes:</b> Sports, Animal Welfare, Community Building<br>
							<b>Top Volunteer Organizations You've Worked With:</b> PAWS, CARA, Gawad Kalinga<br>
							<b>No. of Volunteer Opportunities Accessed:</b> 30<br>
							<b>Locations Volunteered At:</b> Metro Manila, Iloilo, Batangas<br>
							<b>Member Since:</b> <?php echo $account['dateJoined']; ?><br>
						</div>
</body>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Display</h4>
        </div>
        <div class="modal-body">
          <p>Change your display.</p>
		<?php  echo form_open('homepage/changeDisplay');
        echo'<div class="form-group">';
        echo '<label class="control-label">New Display:</label>';
        echo form_input(array('name' => 'newdisplay', 'type'=>'text','class'=>'form-control','placeholder'=>'New display.'));
        echo'</div>';
		  
		  ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





	  	<!-- Link Facebook -->
	  <div class="modal fade" id="modalFacebook" role="dialog">
	    	<div class="modal-dialog">
	    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Link Facebook Account</h4>
		        </div>
			        <div class="modal-body">
			          <p>Your linked Facebook account.</p>
						<?php  echo form_open('homepage/changeDisplayNGO');
				        echo'<div class="form-group">';
				        ?>
				       	<text class="form-control"><?php echo $account['facebook']; ?></text>
			        </div>
				
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Link Facebook Account</button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>
	      
	   </div>
	   </div>


		<!-- Twitter Email -->
	 <div class="modal fade" id="modalTwitter" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      	<div class="modal-content">
	        	<div class="modal-header">
	       			<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Link Twitter Account</h4>
	        	</div>
		        <div class="modal-body">
		          <p>Your linked Twitter account.</p>
					<?php  echo form_open('homepage/changeDisplayNGO');
			        echo'<div class="form-group">';
			        ?>
			       	<text class="form-control">
			       	<?php 
			       	echo $account['twitter']; 
			       	?></text>
		        </div>
	        </div>
	        <div class="modal-footer">
	         	<button type="button" class="btn btn-default" data-dismiss="modal">Link Twitter Account</button>
	         	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	  </div>
	  </div>
	

	<!-- Link Email -->
	  <div class="modal fade" id="modalEmail" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      	<div class="modal-content">
	        	<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">&times;</button>
	         		<h4 class="modal-title">E-mail Address</h4>
	        	</div>
		        <div class="modal-body">
		          	<p>You have linked your E-mail Address</p>
					<?php  echo form_open('homepage/changeDisplayNGO');
			        echo'<div class="form-group">';
			        ?>
			       	<text class="form-control"><?php echo $account['email']; ?></text>
		        </div>
			
	        </div>
	        <div class="modal-footer">
	          	<button type="button" class="btn btn-default" data-dismiss="modal">Change E-mail Address</button>
	         	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	    </div>
	  </div>
  
</body>
</html>