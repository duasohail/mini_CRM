<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRM</title>

	<!-- css link of bootstrap -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-flex d-flex justify-content-center align-items-center main">
		<div class="row no-gutters formBorder p-1">
			<div class="col-sm-12 col-lg-12  col-md-12 ">
				<h2 class="text-center pt-4 pb-3 text-white">Company Registration</h2>
				<?php echo form_open('Welcome/companyRegister', 'id="add_class", name="add_class"') ?>
					<div class="p-3 text-center">
						
						<!-- error message -->
						<?php 
							if($this->session->flashdata('comp_msg')){ ?>
							<p class="text-white text-left bg-danger p-1"><?php echo $this->session->flashdata('comp_msg')?></p>  
								
						<?php	}?>

						<input type="text" class="form-control mb-4 mt-1 sign_in_input" name="name" value="" placeholder="Enter your Comapny Name">
						<input type="email" class="form-control mb-4 mt-1 sign_in_input" name="email" value="" placeholder="Enter your email">
						<input type="password" class="form-control mb-4 mt-1 sign_in_input" name="pass" value="" placeholder="Enter your password">
						<input type="text" class="form-control mb-3  sign_in_input" name="website" value="" placeholder="website">
						<p class="text-white mb-1 text-left">Comapany Logo (minimum 100×100)</p>
						<input type="file" class="form-control mb-4 pt-2 sign_in_input" name="logo" value="" placeholder="logo">
						<button type="submit" class="btn btn-sm btn-danger text-light mb-1 sign_in_button" name="Submit" value="Submit" >Company</button><br>
						<a href=" <?php echo site_url('Welcome/');  ?>" class="reg text-white">Sign In</a>
					</div>
				<?php form_close(); ?>
			</div>
		</div>
	</div>
</body>

<!-- bootstrap scripts links -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</html>