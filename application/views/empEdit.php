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
                <!-- <?php echo $_GET['id']; ?> -->
                <h2 class="text-center pt-4 pb-3 text-white">Emp edit In </h2>
                <?php echo form_open('Welcome/empEdit', 'id="add_class", name="add_class"') ?>
                <div class="p-3 text-center">

                    <!-- error message -->

                    <?php
                    if ($this->session->flashdata('message')) { ?>
                        <p class="text-white text-left bg-danger p-1"><?php echo $this->session->flashdata('message') ?></p>

                    <?php    } elseif ($this->session->flashdata('comp_msg_sucess')) { ?>

                        <p class="text-white text-left bg-success p-1"><?php echo $this->session->flashdata('comp_msg_sucess') ?></p>

                    <?php } elseif ($this->session->flashdata('emp_msg_sucess')) { ?>

                        <p class="text-white text-left bg-success p-1"><?php echo $this->session->flashdata('emp_msg_sucess') ?></p>
                    <?php } ?>

                    <?php $emps = $this->session->userdata('emp');
                    foreach ($emps as $emp) {
                        if ($_GET['id'] == $emp['emp_id']) { ?>

                            <input type="hidden" class="form-control mb-4 mt-1 sign_in_input" name="emp_id" value="<?php echo $emp['emp_id']; ?>" placeholder="Enter your First Name">
                            <input type="text" class="form-control mb-4 mt-1 sign_in_input" name="name" value="<?php echo $emp['first_name']; ?>" placeholder="Enter your First Name">
                            <input type="text" class="form-control mb-4 mt-1 sign_in_input" name="last_name" value="<?php echo $emp['last_name']; ?>" placeholder="Enter your Last Name">
                            <input type="email" class="form-control mb-4 mt-1 sign_in_input" name="email" value="<?php echo $emp['email']; ?>" placeholder="Enter your email">
                            <input type="text" class="form-control mb-4 mt-1 sign_in_input" name="pass" value="<?php echo $emp['password']; ?>" placeholder="Enter your password">
                            <select type="text" class="form-control mb-4  sign_in_input" name="Company" value="">
                                <option>Select Company</option>

                                <?php
                                $companies = $this->session->userdata('companies');
                                foreach ($companies as $company) { ?>
                                    <option value="<?php print_r($company['company_id'] . ' | ' . $company['name']); ?>"> <?php print_r($company['name']); ?></option>

                                <?php }
                                ?>
                            </select>
                            <input type="text" class="form-control mb-4 mt-1 sign_in_input" name="phone" value="<?php echo $emp['phone']; ?>" placeholder="Enter your phone no">


                    <?php }
                    } ?>

                    <button type="submit" class="btn btn-sm btn-danger text-light mb-1 sign_in_button" name="Submit" value="Submit">Register</button><br>
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