<?php

    //Include constant.php
    include('config/constants.php');

    //get ID of admin
    $id = $_GET['id'];

    //creat sql query to delete admin

    $sql = "DELETE FROM tbl_cart WHERE id=$id";

    //Execute the query
    $res = mysqli_query($conn, $sql);

    //check whether the query executed successfully or not
    if($res==true)
    {
        // redirect to manage admin page
        header('location:'.SITEURL.'cart.php');

    }
    else
    {
        //echo "Faild to Delete Admin";
        $_SESSION['delete'] = "Faild to Deleted Category. Try Again Later.";
        // redirect to manage admin page
        header('location:'.SITEURL.'cart.php');
    }

    //redirect to manage admin page with message




?>