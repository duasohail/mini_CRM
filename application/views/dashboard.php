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
                <button class="btn btn-sm btn-danger" onclick="company()" id='company'>Companies</button>
                
                <!-- <button class="btn btn-sm btn-danger" onclick="emp()" id='emp'>Employees</button> -->
                <button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo site_url('Welcome/empData'); ?>">Employees</a></button>
                <hr class="bg-danger w-75">
            </div>
        </div>

        <div class="row no-gutters mt-2 text-center" id='tab'>
            <div class="col-sm-12 col-12" id="tab1">
                <table class="table table-dark w-100">
                    <thead>
                        <tr>
                            <th scope="col">s/no</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $companies=$this->session->userdata('company_all');
                    // print_r($companies);
                    $count=1;
                    foreach( $companies as $company ){?>
                    
                          <tr>
                            <th scope="row"><?php echo $count++ ; ?></th>
                            <th scope="row"><?php echo $company['name'];?></th>
                            <td><?php echo $company['email'];?></td>
                            <td><?php echo $company['website'];?></td>
                            <td> <button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo site_url('Welcome/editCompanyView')?>?id=<?php echo $company['company_id']?>">Edit</a></button></td>
                            <td> <button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo site_url('Welcome/deleteComp')?>?id=<?php echo $company['company_id']?>&email=<?php echo $company['email']?>">Delete</a></button></td>
                        </tr>

                   <?php  }?>
                       
                            
                    </tbody>
                </table>
            </div>

        </div>


    </div>
</body>


<!-- bootstrap scripts links -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</html>