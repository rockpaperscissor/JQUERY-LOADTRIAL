<?php


$con = mysqli_connect("localhost","root","","thisdatabase");
if(!con){
    die(mysqli_error($con));
}
else{
    echo "Connected successfully";
}





?>