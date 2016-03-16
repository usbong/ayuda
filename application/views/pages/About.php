

<head>
<link href=" <?php  echo base_url('application/views/Icons and Logos_FB Icon (White).png');?>" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="design.css">
	<style>
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
			margin: 20px 250px 10px 250px;
			text-align:left;
			}
			
			
			#section {
			width:250px;
			float:left;
			padding:5px;
			margin: 20px 20px 80px 250px;			
			}

			#nav {	
			width:350px;
			float:left;
			padding:10px;
			margin: 20px 20px 80px 250px;			
			}
			
			div.calendarContact
			{
			margin: 20px 250px 0px 800px;
   			text-align: left;
   			width: 500px;
			text-align: left;
			background-color:#F2F2F2;
			padding: 20px 20px 20px 20px;
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


			.redShortButton {
			background-color:#f01d1d;
			}

			.form-control,.exampleInputEmail1
			{
				margin-left: 200px;
			}
			.calendar
			{
			    margin-left: -200px;
			    margin-top:  -50px;
			}			
			.calendar table
			{
				position: relative;
			    width: 700px;
   				height: 500px;
			}
			.calendar table th
			{
			    width: 50px;
				text-align: center;
			}
			.calendar table td
			{
			    width: 50px;
				border: 4px solid black;
				font-style: italic;
				font-weight: bold;
			}
			.image
			{
				width: 20px;
				height: 20px;
			}
			.day
			{
				margin-top: -25px;
    			margin-left: 5px;
				text-align: left;
			}
			.contday
			{
				height: 20px;
    			margin-left: 5px;
				text-align: left;
			}
		
	</style>

	</head>

<body>
				<div class="content">				
					<br><br>
					<font size="6" color="#e62e2e"><b>VOLUNTEER WITH US TODAY!</b></font><br>
					<i><p class="description">Check our calendar for more details on available opportunities that fit your schedule. Select the category of the volunteer opportunity you wish to access for more details on organization behind it and the event itself. Or, you can check out our volunteer map and see which opportunities are near you!<br><br>
					We are constantly updating our volunteer opportunities, so if you don't find a perfect fit for you just yet, check back in a few days!
					</p></i>
					<br><br>
		
				</div>
		
				<div  id="nav">
		
					<br><br><br>
<div class = "calendar">
<table>
<tr>
	<th><a href = "#" data-month="<?php echo $month;?>" data-year = "<?php echo $year;?>" class = "prev"><img src= <?php echo base_url("assets/images/Icons_and_Logos_Arrow_Left_Red.png");?> width="50"></a></th>
	<th colspan="5"><FONT FACE="Geneva, Arial" SIZE=6 COLOR="#2C345B" style="text-transform:uppercase"><?php echo date('F',strtotime($date)) . ' ' . $year;?></FONT></th>
	<th><a href = "#" data-month="<?php echo $month;?>" data-year = "<?php echo $year;?>" class = "next"><img src= <?php echo base_url("assets/images/Icons_and_Logos_Arrow_Right_Red.png");?> width="50"></a></th>
</tr>	
<tr>
	<?php 
	foreach ($headings as $headings) {
		echo'<th>'.$headings.'</th>';
	}
	?>
</tr>
<tr>
<?php
while($endday > $ctr)
{
	$ctr++;
	if($startday == $ctr)
	{
		echo '<td></td>';
	}
	else
	{
		break;
	}
}

while($endday >= $daysctr)
{
	$image = false;
	$img = '';
	foreach($query as $row)
	{

	if(date('Y-m-d',strtotime($year.'-'.$month.'-'.$daysctr)) == $row['datestart'])
	{ 
		$img = $img . '<a href = "#" data-content = "'.$row['eventid'].'" class = "eventclick"><img class = "image" src="data:image/jpeg;base64,'.base64_encode( $row['icon']) .'"/></a>';
	$image = true;
	}
	}
	if(!$image)
	{
	echo '<td><div class = "day">'.$daysctr.'</div><div class = "contday"></div></td>';	
	}
	else
	{
		echo '<td><div class = "day">'.$daysctr.'</div><div class = "contday">'.$img.'</div></td>';
	}
	
	
	
	if($ctr % 7 == 0)
	{
		echo '</tr>';
	}
	else
	{
		if($endday == $daysctr)
		{
			$loop = 7-($ctr % 7);
			for ($x = 0; $x < $loop; $x++) {
    		echo '<td></td>';
			} 
		}
	}
	$ctr++;
	$daysctr++;
}
?>
</tr>
</table>
				</div>
				</div>
				
				<br><br>
		
						<div  class="volunteercontent">
						
						<form class="inline">
								<div class="form-group" >
									<label class = "exampleInputEmail1" for="exampleInputEmail1">LOCATION</label><br>
									<label>
											<select name="" class="form-control loc" style="background-color:#f2f2f2">
											<option selected value="All">All</option>
<?php
foreach($location as $location)
{
    ?>
    <option value="<?=$location['name']?>"><?=$location['name']?></option>
    <?php
}
?>
</select>
									
									</label>
								</div>
							
							<form class="inline">
								<div class="form-group">
									<label class = "exampleInputEmail1" for="exampleInputEmail1">SEARCH</label><br>
									<label><select class="form-control cat" style="background-color:#f2f2f2">
										<option value="All">All</option>
<?php
foreach($category as $category)
{
    ?>
    <option value="<?=$category['categoryName']?>"><?=$category['categoryName']?></option>
    <?php
}
?>
									</select></label>
								</div>
									
							
								<div class="form-group">
									<label class = "exampleInputEmail1" for="exampleInputEmail1">SELECT YOUR TYPE OF WORK</label><br>
									<label><select class="form-control work" style="background-color:#f2f2f2">
									<option value="All">All</option>
<?php
foreach($typeofwork as $typeofwork)
{
    ?>
    <option value="<?=$typeofwork['workname']?>"><?=$typeofwork['workname']?></option>
    <?php
}
?>
								
									</select></label>
								</div>
							
							<br>
							<b class = "exampleInputEmail1">VOLUNTEER DETAILS</b><br>
		
						<div class="calendarContact">
							<b>Event Name:</b><br><br>
							<b>Organizer:</b><br><br>
							<b>Venue:</b><br><br>
							<b>Date & Time:</b><br><br>
							<b>Type of Work:</b><br><br>
							<b>Minimum Requirements:</b><br><br>
							<b>Preferred Skills:</b><br><br>
							<b>Other Comments:</b><br>
							<br>
							
			
						</form>	
						
						
						<div align="center">
								<?php
								echo anchor('homepage/signupview','CLICK HERE TO SIGNUP',array('class'=>'redShortButton'));
								?>
							</div><br>
			
						</div>
				
				
		</div>		
				
				
				
				<br><br>
	
			
	
			<br><br>
				<div align="center">
					<font size="6" color="#e62e2e"><b>WHERE CAN YOU FIND US?</b></font><br>
					<p class="description">We make it point to spread the joys of volunteerism as much as we can all over the country! Check out our volunteer map that shows which places our volunteers have reached using our website! Hover over the map area to see which opportunities are already accessible in your region, or simply click from the list of places on the left side of the map.<br><br>
					Don't forget, we're constantly updating! So if you haven't found the perfect opportunity for you just yet, don't lose hope! If you know of a volunteer opportunity in your area that you want to share with us, feel free to contact us and let us know about it!<br>
					</p>
				</div>
	


</body>


<script type="text/javascript">
    $(document).ready(function() {
    	$('.prev').on('click',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/prev');?>",
          	data: {year:$(this).attr('data-year'),month:$(this).attr('data-month'),loc:$('.loc').val(),cat:$('.cat').val(),work:$('.work').val()},
          	success: function(data)
          	{
            $('.calendar').html(data);
          	}
        	})
    		});
    	$('.next').on('click',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/next');?>",
          	data: {year:$(this).attr('data-year'),month:$(this).attr('data-month'),loc:$('.loc').val(),cat:$('.cat').val(),work:$('.work').val()},
          	success: function(data)
          	{
            $('.calendar').html(data);
          	}
        	})
    		});

    	$('.eventclick').on('click',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/content');?>",
          	data: {volunteerid:$(this).attr('data-content')},
          	success: function(data)
          	{
            $('.calendarcontact').html(data);
          	}
        	})
    		});

    	$('.loc').on('change',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/about');?>",
          	data: {year:$('.prev').attr('data-year'),month:$('.prev').attr('data-month'),loc:$(this).val(),cat:$('.cat').val(),work:$('.work').val()},
          	success: function(data)
          	{
            $('.calendar').html(data);
          	}
        	})
    		});

    	$('.cat').on('change',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/about');?>",
          	data: {year:$('.prev').attr('data-year'),month:$('.prev').attr('data-month'),loc:$('.loc').val(),cat:$(this).val(),work:$('.work').val()},
          	success: function(data)
          	{
            $('.calendar').html(data);
          	}
        	})
    		});

        $('.work').on('change',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/about');?>",
          	data: {year:$('.prev').attr('data-year'),month:$('.prev').attr('data-month'),loc:$('.loc').val(),cat:$('.cat').val(),work:$(this).val()},
          	success: function(data)
          	{
            $('.calendar').html(data);
          	}
        	})
    		});
    });
</script> 