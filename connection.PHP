<?php

    $con=mysqli_connect('localhost','root','','sitepadarie');

    if(!$con)

    
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }