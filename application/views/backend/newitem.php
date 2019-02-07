<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Item Entry Form</title>
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
    <a href="<?php echo base_url()?>Databaseview/available">View This Database</a>
    <a href="<?php echo base_url()?>Databaseview/logout">Logout</a>
</div>

<div class="container">
    <h3>New Item Entry Form</h3>
    <br /><br />
    <form method="post" action="<?php echo base_url()?>Insert/available_form_validation">
        <?php
        if($this->uri->segment(2) == "Insert")
        {
            echo '<p class="text-success"> Data Inserted </p>';
        }
        else
        {
            //grab the data from the failed call to form_validation and use Javascript to fill the fields back in
        }
        ?>
    

        <div class="form-group">
            <label>Enter Item ID</label>
            <input type="number" name="itemid" class="form-control"/>
            <span><?php echo set_value("name");?></span>
        </div>
        <div class="form-group">
            <label>Enter Description</label>
            <input type="text" name="description" class="form-control"/>
            <span class="text-danger"><?php echo form_error("name");?></span>
        </div>
        <div class="form-group">
            <label>Enter Quantity of Items</label>
            <input type="number" name="quantity" class="form-control"/>
            <span><?php echo form_error("name");?></span>
        </div>
        <div class="form-group">
            <label>Enter Type ID</label>
            <input type="number" name="typeid" class="form-control"/>
            <span><?php echo form_error("name");?></span>
        </div>

        <input type="submit" name="insert" value="Insert" class="btn-info"/>
    </form>
</div>

</body>
</html>
