

<head>
	<link rel="stylesheet" type="text/css" href="design.css">

	<style>
	

	
			#nav {

			
			width:250px;
			float:left;
			padding:5px;	 
margin: 20px 20px 10px 250px;			
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
				margin: 20px 250px 10px 250px;
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
		
		
		<form class="inline" action="">
	
		
		<div class="form-group">
				<i><label for="exampleInputEmail1">SEARCH</label></i>
				<input class="form-control keywords" type="text" style="font-style:italic" maxlength="30" placeholder="Keywords" style="background-color:#f2f2f2">
		</div>
		
			<i><b>CHOOSE YOUR CATEGORY</b></i><br><br>
			
		<?php 
		$ctr = 1;
		foreach ($categoryArray as $categoryArray) {
		echo '<a href = "#" class = "catclick" data-id = "'.$categoryArray['categoryName'].'"><img width = "60" src="data:image/jpeg;base64,'.base64_encode( $categoryArray['icon']) .'"/></a>';
		if(($ctr % 3) == 0)
		{
			echo '<br><br>';
		}
		$ctr++;
		}
		?>
		
		
		<div class="form-group">
			
			<label for="exampleInputEmail1"><i>SELECT YOUR TYPE OF WORK:</i></label>
				
					<select name="" class="form-control work" style="background-color:#f2f2f2; font-style:italic;">
						<option value="All">All</option>
<?php
foreach($rowtype as $each2)
{
    ?>
    <option value="<?php echo $each2->workname;?>"><?php echo $each2->workname; ?></option>
    <?php
}
?>
</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1"><i>SELECT YOUR LOCATION:</i></label>
			<label>
					
					<select name="" class="form-control loc" style="background-color:#f2f2f2; font-style:italic;">
					<option value="All">All</option>
<?php
foreach($rowloc as $each1)
{
    ?>
    <option value="<?php echo $each1->name;?>"><?php echo $each1->name; ?></option>
    <?php
}
?>
</select></label>
			
		</div>
		</form>
		</div>
<div class = "seemore">
<?php 
foreach ($query as $row) {
?>
		<div  id="selection" style="background-color:#f2f2f2;margin:10px 30px 30px 550px;padding: 10px 10px 10px 10px;border-radius: 25px;font-style:italic">
		<img class = "image" src="data:image/jpeg;base64,<?php echo base64_encode( $row['icon']) ?>"/>
		<div class = "contentdesc">
		<b><?php echo $row['eventname']?></b>
		<br>
		<?php echo $row['fullname']?>
		</div>	
			<br><br>
			
			<p align="left">
			<?php echo $row['display']?>
			</p>
			
			<br><br>
			<b>Type of Work:</b> <?php echo $row['typeofwork']?><br>
			<b>Minimum Requirements:</b> <?php echo $row['minimumrequirements']?><br>
			<b>Other Comments:</b>
			<br>
			<br>
			<img src="<?php echo base_url('assets/images/Icons and Logos_Personal Dash (Calendar).png'); ?>" width="60"> <?php echo date("F j, Y",strtotime($row['dateStart']))?> <img src="<?php echo base_url('assets/images/Icons and Logos_Personal Dash (Time).png'); ?>" width="60"> <?php echo date("h:i A",strtotime($row['timeStart'])) . '-' . date("h:i A",strtotime($row['timeEnd']))?> <img src="<?php echo base_url('assets/images/Icons and Logos_Personal Dash (Location).png'); ?>" width="60"> <?php echo $row['venue'] . ' , ' . $row['location']?> <br><br>
						<div align="center">
							<?php
								echo anchor('','CLICK HERE TO SIGNUP',array('class'=>'normalButtonRed','data-count'=>$count));
						
							?>
						</div>
			<br><br>
		</div>		
<?php 
}
if($rcount > $limit)
{
	?>
		<br><br>
		
		<div id="nav">
		</div>
		
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

<script type="text/javascript">
    $(document).ready(function() {
    	$('.normalButtonBlue').on('click',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/seemore');?>",
          	data: {count:$('.normalButtonRed').attr('data-count'),id:$(this).attr('data-id')},
          	success: function(data)
          	{
            $('.seemore').html(data);
          	}
        	})
    		});

    	$('.catclick').on('click',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/clone1');?>",
          	data: {id:$(this).attr('data-id')},
          	success: function(data)
          	{
            $('.seemore').html(data);
          	}
        	})
    		});

    	$('.loc').on('change',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/clone1');?>",
          	data: {loc:$(this).val()},
          	success: function(data)
          	{
            $('.seemore').html(data);
          	}
        	})
    		});

    	$('.work').on('change',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/clone1');?>",
          	data: {work:$(this).val()},
          	success: function(data)
          	{
            $('.seemore').html(data);
          	}
        	})
    		});

    	$('.keywords').on('keyup',function(e){
    		e.preventDefault();
    		$.ajax({
          	type: 'POST',
          	url: "<?php echo site_url('homepage/clone1');?>",
          	data: {wordss:$(this).val()},
          	success: function(data)
          	{
            $('.seemore').html(data);
          	}
        	})
    		});

    });
</script> 