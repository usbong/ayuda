

<head>
	<link rel="stylesheet" type="text/css" href="design.css">

	<style>
	

	
			#nav {

			
			width:250px;
			float:left;
			padding:5px;	 
margin: 20px 20px 10px 150px;			
			}
			#section {
				background-color:#F2F2F2;
			width:350px;
			float:left;
			padding:10px;
margin: 20px 25px 10px 25px;			
			}
	
.image
{
	width: 100px;
	height: 100px;
}
	
			img {
			opacity: 1.0;
			filter: alpha(opacity=40); /* For IE8 and earlier */
				}

			img:hover {
			opacity: 0.4;
			filter: alpha(opacity=100); /* For IE8 and earlier */
			}
			
			div.content
			{
			background-color:#F2F2F2;
			text-align: center;
			}
			
				p.description
			{
				margin: 20px 250px 10px 150px;
				text-align:left;
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

			.contentdesc
			{
				    display: inline-block;
			}
		</style>
	</head>

	<body>	
	<br>
	<br>
	<br>
	

	
	<div align="center">
	<font size="6" color="#e62e2e"><b>PROJECT LISTING</b></font><br><br>
		
	</div>
	
	
		<div  id="nav">
		
		
<!--		<form class="inline" action="">
-->	
		<?php echo validation_errors();
			echo form_open('Pages/viewProjects');
		?>
		<div class="form-group">
				<i><label for="exampleInputEmail1">SEARCH</label></i>
				<?php echo form_input(array('name' => 'keywords', 'type'=>'text','class'=>'form-control','placeholder'=>'keywords', 'style' => 'font-style:italic; background-color:#f2f2f2', 'maxlength' => '30', 'value' => set_value('keywords'), 'autocomplete' => 'off'));?>
		</div>

		<center>		
			<i><b>CHOOSE YOUR CATEGORY</b></i><br>
		<?php 
			$ctr = 1;
			foreach ($categoryArray as $categoryArray) {
			echo '<label>';
			echo '<input type="checkbox" name="categoryId" value="'.$categoryArray['id'].'" '.set_checkbox('eventCategory', $categoryArray['id']).'/>';
			echo '<img id="'.$categoryArray['categoryName'].'"width = "50" src="data:image/jpeg;base64,'.base64_encode( $categoryArray['icon']) .'"/>';
			echo '</label>';
				if(($ctr % 3) == 0)
				{
					echo '<br>';
				}
				$ctr++;
			}
		?>
		</center>
		
		<div class="form-group">
			
			<label for="exampleInputEmail1"><i>SELECT YOUR TYPE OF WORK:</i></label>
					<select name="" class="form-control work" style="background-color:#f2f2f2; font-style:italic;">
						<option value="None">None</option>
<?php
foreach($typeOfWorkList as $eachTypeOfWorkList)
{
	echo '<option value="'.$eachTypeOfWorkList->workname.'" '.set_select('typeOfWork', $eachTypeOfWorkList->workname).'>'.$eachTypeOfWorkList->workname.'</option>';
}
?>
</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1"><i>SELECT YOUR LOCATION:</i></label>					
					<select name="" class="form-control loc" style="background-color:#f2f2f2; font-style:italic;">
					<option value="None">None</option>
<?php
foreach($rowLoc as $eachLocationList)
{
	echo '<option value="'.$eachLocationList->name.'" '.set_select('location', $eachLocationList->name).'>'.$eachLocationList->name.'</option>';
}
?>
</select></label>
			
		</div>
<!--		</form> -->
		<?php echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-danger btn-lg btn-block sbmt','value'=>'SEARCH'));
		form_close();?>
		</div>

<div class = "seemore">
<?php 
foreach ($query as $row) {
?>
		<div  id="selection" style="background-color:#f2f2f2;margin:10px 100px 30px 450px;padding: 20px 20px 20px 20px;border-radius: 25px;font-style:italic">
		<img class = "image" src="data:image/jpeg;base64,<?php echo base64_encode( $row['icon']) ?>"/>
		<div class = "contentdesc">
		<b><?php echo $row['eventName']?></b>
		<br>
		<?php echo $row['fullname']?>
		</div>	
			<br><br>
			
			<p align="left">
			<?php echo $row['display']?>
			</p>
			
			<br><br>
			<b>Type of Work:</b> <?php echo $row['typeOfWork']?><br>
			<b>Minimum Requirements:</b> <?php echo $row['minReq']?><br>
			<b>Other Comments:</b>
			<br>
			<br>
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
				<br>


				<div align="center" style="font-style:normal">
							<?php
								echo anchor('','CLICK HERE TO SIGNUP',array('class'=>'normalButtonRed','data-count'=>$count));
						
							?>
				</div>
			<br>
		</div>		
<?php 
}
if($rcount > $limit)
{
	?>
		<br><br>
				
		<div id="selection">
			<div  align="center">
		<?php
			echo anchor('homepage/signupview','CLICK HERE TO SEE MORE',array('class'=>'normalButtonBlue'));
		?>	</div>
		</div>
	<?php
}
?>			
<br><br>
</body> 