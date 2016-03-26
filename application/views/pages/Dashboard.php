<title>
	Dashboard
</title>

<head>
	<link rel="stylesheet" type="text/css" href="design.css">
<!--	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">			
		window.onload = function() {
			$("#category a").click(function(event) {
			  //alert("hello:");
			  alert(event.target.id);
//			  $this->session->set_userdata('eventcategory',event.target.id);
			  set_select('eventcategory',event.target.id);
			  return false;
			});
		};
	</script>
-->
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
			
			 a.add-event {
				color: #333333;
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
				<a id='modal-launcher' data-toggle="modal" data-target="#modalFacebook"><img src=" <?php echo base_url('assets/images/Icons and Logos_FB Icon (Blue).png');?>" width="40"></a>
				<a id='modal-launcher' data-toggle="modal" data-target="#modalTwitter"><img src=" <?php echo base_url('assets/images/Icons and Logos_Twitter Icon (Blue).png');?>" width="40"></a>
				<a id='modal-launcher' data-toggle="modal" data-target="#modalEmail"><img src=" <?php echo base_url('assets/images/Icons and Logos_Email Icon (Blue).png');?>" width="40"></a>
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
						echo '<td><a class="add-event" id="modal-launcher" data-toggle="modal" data-target="#add-event-modal"><img src="';echo base_url("assets/images/addEventIcon.png");echo '" width="150"></a></a></td>';
						echo '<td><a target="_blank" href="https://www.blogger.com/"><img src="';echo base_url("assets/images/addBlogIcon.png");echo '" width="150"></a></a></td>';
						echo '<td><img src="';echo base_url("assets/images/yourStatisticsIcon.png");echo '" width="150"></a></td>';
						echo '<td><img src="';echo base_url("assets/images/volunteerFeedbackIcon.png");echo '" width="150"></a></td>';
						echo '</tr>';
						echo '<tr>';
						echo '<td valign="top"><a class="add-event" id="modal-launcher" data-toggle="modal" data-target="#add-event-modal"><center><b><font size="3">ADD EVENT</font></b></center></a></td>';
						echo '<td valign="top"><center><b><font size="3">ADD BLOG</font></b></center></td>';
						echo '<td valign="top"><center><b><font size="3">YOUR<br>STATISTICS</font></b></center></td>';
						echo '<td valign="top"><center><b><font size="3">VOLUNTEER<br>FEEDBACK</font></b></center></td>';
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

 
</body>
</html>
	
	<div class="modal inmodal fade" id="add-event-modal" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog  modal-md">
			<div class="modal-content">
				<div class="modal-body add-event-modal">	  
					<div class="clearfix"></div>
					<div id='social-icons-container'>
						<div class="form-group">
						<h6 align="center"><font size="5"><b>ADD EVENT</b></font></h6>
							<?php
								echo form_open('Form/add_event_submitted');
//								echo $this->session->set_userdata('username',$account['username']);
								echo $this->session->set_userdata('account',$account);
								echo'<i>';
								echo'<div class="form-group">';
								echo '<table>';
								echo '<tr>';
								echo '<td style="padding-right:10px"><center>';
								echo '<label class="control-label" for="email">Select Volunteer Opportunity Category:<font color="red">*</font></label>';
								echo '<br>';
								$ctr = 1;
//								echo form_fieldset('category');
								foreach ($categoryArray as $categoryArray) {
								echo '<label>';
								echo '<input type="radio" name="categoryId" value="'.$categoryArray['id'].'" '.set_radio('eventCategory', $categoryArray['id']).'/>';
								echo '<img id="'.$categoryArray['categoryName'].'"width = "50" src="data:image/jpeg;base64,'.base64_encode( $categoryArray['icon']) .'"/>';
								echo '</label>';
								if(($ctr % 3) == 0)
								{
									echo '<br>';
								}
								$ctr++;
								}
								echo '<label>Select Type of Work:</label>';
								echo '<select name="typeOfWork" class="form-control work" style="background-color:#f2f2f2; font-style:italic;">';
								echo '<option value="None">None</option>';
								foreach($typeOfWorkList as $eachTypeOfWorkList)
								{
									echo '<option value="'.$eachTypeOfWorkList->workname.'" '.set_select('typeOfWork', $eachTypeOfWorkList->workname).'>'.$eachTypeOfWorkList->workname.'</option>';
								}
								echo '</select>';
								echo '<br><br><font color="red">*</font> Required to be filled out.';
								echo '</center></td>';
								echo '<td>';
									echo '<label class="control-label" for="email">Event Name:<font color="red">*</font></label>';
									echo form_input(array('name' => 'eventname', 'type'=>'text','class'=>'form-control','placeholder'=>'Event Name','value' => set_value('eventname'), 'autocomplete' => 'off'));
									echo $this->session->set_userdata('eventname',$this->input->post('eventname'));
									echo '<table>';
										echo '<tr>';
										echo '<td>';
										echo '<label class="control-label" for="email">Start Date:<font color="red">*</font></label>';
										echo form_input(array('name' => 'dateStart', 'type'=>'date','class'=>'form-control','placeholder'=>'Start Date'));
										echo $this->session->set_userdata('dateStart',$this->input->post('dateStart'));
										echo '</td>';
										echo '<td>';
										echo '<label class="control-label" for="email">End Date:<font color="red">*</font></label>';
										echo form_input(array('name' => 'dateEnd', 'type'=>'date','class'=>'form-control','placeholder'=>'End Date'));
										echo $this->session->set_userdata('dateEnd',$this->input->post('dateEnd'));
										echo '</td>';
										echo '</tr>';
										echo '<tr>';
										echo '<td>';
										echo '<label class="control-label" for="email">Start Time:<font color="red">*</font></label>';
										echo form_input(array('name' => 'timeStart', 'type'=>'time','class'=>'form-control','placeholder'=>'Start Time'));
										echo $this->session->set_userdata('timeStart',$this->input->post('timeStart'));
										echo '</td>';
										echo '<td>';
										echo '<label class="control-label" for="email">End Time:<font color="red">*</font></label>';
										echo form_input(array('name' => 'timeEnd', 'type'=>'time','class'=>'form-control','placeholder'=>'End Time'));
										echo $this->session->set_userdata('timeEnd',$this->input->post('timeEnd'));
										echo '</td>';
										echo '</tr>';
									echo '</table>';
									echo '<label class="control-label" for="email">Venue:<font color="red">*</font></label>';
									echo form_input(array('name' => 'venue', 'type'=>'text','class'=>'form-control','placeholder'=>'Venue','value' => set_value('venue'), 'autocomplete' => 'off'));
									echo $this->session->set_userdata('venue',$this->input->post('venue'));
									echo '<label>Location:</label>';
									echo '<select name="location" class="form-control work" style="background-color:#f2f2f2; font-style:italic;">';
									echo '<option value="None">None</option>';
									foreach($locationList as $eachLocationList)
									{
										echo '<option value="'.$eachLocationList->name.'" '.set_select('location', $eachLocationList->name).'>'.$eachLocationList->name.'</option>';
									}
									echo '</select>';
									echo '<label class="control-label" for="email">Minimum Requirements:<font color="red">*</font></label>';
									echo form_input(array('name' => 'minReq', 'type'=>'text','class'=>'form-control','placeholder'=>'Minimum Requirements','value' => set_value('minReq'), 'autocomplete' => 'off'));
									echo $this->session->set_userdata('minReq',$this->input->post('minReq'));
									echo '<label class="control-label" for="email">Preferred Skills:<font color="red">*</font></label>';
									echo form_input(array('name' => 'preferredSkills', 'type'=>'text','class'=>'form-control','placeholder'=>'Preferred Skills','value' => set_value('preferredSkills'), 'autocomplete' => 'off'));
									echo $this->session->set_userdata('preferredSkills',$this->input->post('preferredSkills'));
									echo '</td>';									
								echo '</tr>';									
								echo '</table>';									
								echo '<br>';																	
								echo'</i>';								
								echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-danger btn-lg btn-block sbmt','value'=>'CONFIRM EVENT'));
								echo'</div>';
								echo form_close();
								echo validation_errors();
							?>						
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
 </div>