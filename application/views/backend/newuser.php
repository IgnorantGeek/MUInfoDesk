<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<header>

    <h1>Iowa State University</h1>
    <h2>Memorial Union Equipment Checkout</h2>

</header>
<body>

<div class="topnav">

    <a class="active" href="<?php echo base_url()?>Main/backendhome">Home</a>
    <a href="<?php echo base_url()?>Databaseview/edit_db">Previous Page</a>
    <a href="<?php echo base_url()?>Databaseview/identity">View This Database</a>
    <a href="<?php echo base_url()?>Databaseview/logout">Logout</a>
</div>

<div class="container">
    <h3>New User Entry</h3>
    <br /><br />
    <form method="post" action="<?php echo base_url()?>Insert/identity_form_validation">
        <?php
        if($this->uri->segment(1) == "Insert")
        {
            echo '<p class="text-success"> Data Inserted </p>';
        }
        else
        {
            //grab the data from the failed call to form_validation and use Javascript to fill the fields back in"
        }
        ?>
    

        <div class="form-group">
            <label>Enter Name</label>
            <input type="text" name="name" class="form-control"/>
            <span><?php echo set_value("name");?></span>
        </div>
        <div class="form-group">
            <label>Enter 9-digit University ID</label>
            <input type="number" name="uid" size="9" class="form-control"/>
            <span class="text-danger"><?php echo form_error("uid");?></span>
        </div>
        <div class="form-group">
            <label>Enter Phone Number</label>
            <input type="number" name="ph" size="10" class="form-control"/>
            <span><?php echo form_error("ph");?></span>
        </div>
        <div class="form-group">
            <label>Enter Shirt Size</label>
            <input type="text" name="shirt" class="form-control"/>
            <span><?php echo form_error("shirt");?></span>
        </div>

        <input type="submit" name="insert" value="Insert" class="btn-info"/>
    </form>
</div>

</body>
</html>