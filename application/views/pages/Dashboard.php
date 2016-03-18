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
margin: 20px 20px 80px 250px;	
text-align:center;		
			}
			
			div.volunteerOpportunities
			{
			margin: 20px 200px 0px 620px;
			text-align: left;
			background-color:#f2f2f2;
			padding: 20px 20px 20px 20px;
			}
	</style>
</head>

<body>

	<br>
	<br>
	<br>
	
	
		<div align="right">
			<font size="6" color="#e62e2e" style='text-transform: uppercase;'><b>HI <?php echo $account['firstname'];?>!</b></font>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			Your linked accounts: &nbsp;


						<a id='modal-launcher' data-toggle="modal" data-target="#modalFacebook">
						<img src=" <?php  echo base_url('assets/images/Icons and Logos_FB Icon (Blue).png');?>" width="40">
						</a>

						<a id='modal-launcher' data-toggle="modal" data-target="#modalTwitter">
						<img src=" <?php  echo base_url('assets/images/Icons and Logos_Twitter Icon (Blue).png');?>" width="40">
						</a>

						<a id='modal-launcher' data-toggle="modal" data-target="#modalEmail">
						<img src=" <?php  echo base_url('assets/images/Icons and Logos_Email Icon (Blue).png');?>" width="40">
						</a>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br>
		</div>
	
	
	
	
	
				<div  id="nav">
				<br><br>
					<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="250"><br>
					<b><?php echo $account['firstname'] . ' ' . $account['lastname'];?></B><br>
					<?php echo $account['display'];?> <br>
					
					<a id='modal-launcher' data-toggle="modal" data-target="#myModal">
					  <font size="2" color="gray">Edit</font></a>
				</div>
				
				<br><br>
		
						
						<div class="volunteerOpportunities" style="border-radius: 25px;">
						<b>YOUR UPCOMING VOLUNTEER OPPORTUNITIES</b><br><br>
							<img src=" <?php  echo base_url('assets/images/icon1.png');?>" width="100"><b>SESSION EVENTS</b>
							<br><br>
								<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="40">&nbsp;January 8-10,2015
							
							<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="40">&nbsp;8:00AM-5:00PM
							
							<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="40">&nbsp;Marikina City.
							
							<br>
							<hr color="black">
							<img src=" <?php  echo base_url('assets/images/icon1.png');?>" width="100"><b>SESSION EVENTS</b>
							<br><br>
								<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="40">&nbsp;January 8-10,2015
							
							<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="40">&nbsp;8:00AM-5:00PM
							
							<img src=" <?php  echo base_url('assets/images/circle1.png');?>" width="40">&nbsp;Marikina City.
							
							<br>
							<br>

							<div align="center">
							<button id='modal-launcher' class="normalButtonBlue" data-toggle="modal" data-target="#login-modal"><font size="2">CLICK HERE TO SEE MORE VOLUNTEER OPPORTUNITY</font></button>
							<br>
							</div>

							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
						
	
	
	
	
	
	<div  id="nav">
				
					<b>MESSAGES</B><br>
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
				
			
		
						
						<div class="volunteerOpportunities" style="border-radius: 25px;">
							<b>YOUR PAST VOLUNTEER EXPERIENCES</b><br><br>
							<b>Session month year</b><br>
								<img src="<?php echo base_url('assets/images/icon1.png'); ?>" width="80">	&nbsp;&nbsp;
								<img src="<?php echo base_url('assets/images/icon2.png'); ?>" width="80">
							<br><br>
							<div align="center">
							<button id='modal-launcher' class="normalButtonBlue" data-toggle="modal" data-target="#login-modal"><font size="2">CLICK HERE TO SEND US YOUR VOLUNTEER STORY</font></button>
							<br>
							</div>

						</div>
			
							<br><br><br>
	
	
						
					<div class="volunteerOpportunities" style="border-radius: 25px;"> 
						<b>YOUR PERSONAL STATS</b><br><br>
						<b>No. of people You've Helped:</b> 1,034<br>
						<b>Top Personal Causes:</b> Sports, Animal Welfare, Community Building<br>
						<b>Top Volunteer Organizations You've Worked With:</b> PAWS, CARA, Gawad Kalinga<br>
						<b>No. of Volunteer Opportunities Accessed:</b> 30<br>
						<b>Locations Volunteered At:</b> Metro Manila, Iloilo, Batangas<br>
						<b>Member Since:</b> <?php echo $account['DateJoined']; ?><br>
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