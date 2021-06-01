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
				<h2 class="text-center pt-4 pb-3 text-white">Employee Registration</h2>
				<?php echo form_open('Welcome/empRegister', 'id="add_class", name="add_class"') ?>
					<div class="p-3 text-center">
						
						<!-- error message -->
						<?php 
							if($this->session->flashdata('emp_msg')){ ?>
							<p class="text-white text-left bg-danger p-1"><?php echo $this->session->flashdata('emp_msg')?></p>  
								
						<?php	}?>

						<input type="text" class="form-control mb-4 mt-1 sign_in_input" name="name" value="" placeholder="Enter your First Name">
						<input type="text" class="form-control mb-4 mt-1 sign_in_input" name="last_name" value="" placeholder="Enter your Last Name">
						<input type="email" class="form-control mb-4 mt-1 sign_in_input" name="email" value="" placeholder="Enter your email">
						<input type="password" class="form-control mb-4 mt-1 sign_in_input" name="pass" value="" placeholder="Enter your password">
						<select type="text" class="form-control mb-4  sign_in_input" name="Company" value="" >
                            <option>Select Company</option>

							<?php
							 $companies=$this->session->userdata('companies');
								foreach( $companies as $company){?>
									<option value="<?php print_r($company['company_id']); ?>"> <?php print_r($company['name']); ?></option>
									
								<?php }
							?>
                        </select>
						<input type="text" class="form-control mb-4 mt-1 sign_in_input" name="phone" value="" placeholder="Enter your phone no">
						<button type="submit" class="btn btn-sm btn-danger text-light mb-1 sign_in_button" name="Submit" value="Submit" >Register</button><br>
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