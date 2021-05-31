<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRM</title>
	
	<!-- css link of bootstrap -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container-flex d-flex justify-content-center align-items-center main">
		<div class="row no-gutters formBorder">
			<div class="col-12">
				<h2 class="text-center">Sign In</h2>
				<?php echo form_open('admissions/Add_class/add_class', 'id="add_class", name="add_class"') ?>
				<input type="email" >

				<?php form_close();?>
			</div>
		</div>
	</div>
</body>

<!-- bootstrap scripts links -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</html>