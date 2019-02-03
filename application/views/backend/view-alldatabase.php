<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Databases</title>
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<header>

    <h1>Iowa State University</h1>
    <h2>Memorial Union Equipment Checkout</h2>

</header>
<body>

    <div class ="topnav">
        <a class="active" href="<?php echo base_url()?>Main/backendhome">Home</a>
        <a href="<?php echo base_url()?>Databaseview/logout">Logout</a>
    </div>

    <div style="position: center">
        <a href="<?php echo base_url()?>Databaseview/authorized_keys" class="dropbtn">Authorized Keys</a>
        <a href="<?php echo base_url()?>Databaseview/authorized_presets" class="dropbtn">Authorized Presets</a>
        <a href="<?php echo base_url()?>Databaseview/available" class="dropbtn">Available Inventory</a>
        <a href="<?php echo base_url()?>Databaseview/checkout" class="dropbtn">Checked Out Items</a>
        <a href="<?php echo base_url()?>Databaseview/identity" class="dropbtn">Users</a>
        <a href="<?php echo base_url()?>Databaseview/item_types" class="dropbtn">Item Types</a>
        <a href="<?php echo base_url()?>Databaseview/key_lists" class="dropbtn">Key Lists</a>
        <a href="<?php echo base_url()?>Databaseview/list_editors" class="dropbtn">List Editors</a>
        <a href="<?php echo base_url()?>Databaseview/presets" class="dropbtn">Presets</a>
        <a href="<?php echo base_url()?>Databaseview/preset_items" class="dropbtn">Preset Items</a>
    </div>

</body>
</html>