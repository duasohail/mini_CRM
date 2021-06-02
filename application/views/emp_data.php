<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>

    <!-- css link of bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet"> -->
</head>

<body class="bg-dark">
    <div class="container-flex ">
        <div class="row no-gutters bg-danger p-1">

        </div>

        <div class="row no-gutters text-center mt-3">
            <div class="col-sm-12 col-12">
                <button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo site_url('Welcome/dashboard') ?>">Companies</a></button>
                <!-- <button class="btn btn-sm btn-danger"onclick="emp()" id='emp'>Employees</button> -->
                <button class="btn btn-sm btn-danger">Employees</button>
                <hr class="bg-danger w-75">
            </div>
        </div>

        <div class="row no-gutters mt-2 text-center" id='tab'>
            <div class="col-sm-12 col-12" id="tab1">
                <table class="table table-dark w-100">
                    <thead>
                        <tr>
                            <th scope="col">s/no</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">company id | name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $emps = $this->session->userdata('emp');
                        $companies = $this->session->userdata('companies');
                        foreach ($companies as $company) {
                        }
                        $count = 1;
                        foreach ($emps as $key => $emp) {
                            // print_r($companies[$key]['name']);
                        ?>

                            <tr>
                                <th scope="row"><?php echo $count++; ?></th>
                                <th scope="row"><?php echo $emp['first_name']; ?></th>
                                <td><?php echo $emp['last_name']; ?></td>
                                <td><?php echo $emp['email']; ?></td>
                                <td><?php echo $emp['phone']; ?></td>
                                <td><?php echo $emp['company_id']; ?></td>
                                <td> <button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo site_url('Welcome/editEmpView') ?>?id=<?php echo $emp['emp_id'] ?>">Edit</a></button></td>
                                <td> <button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo site_url('Welcome/deleteEmp') ?>?id=<?php echo $emp['emp_id'] ?>&email=<?php echo $emp['email'] ?>">Delete</a></button></td>
                            </tr>

                        <?php  } ?>


                    </tbody>
                </table>
            </div>

        </div>


    </div>
</body>
<script>

</script>


<!-- bootstrap scripts links -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</html>