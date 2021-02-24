<?php

include("db_connect.php");

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$pwd = $_REQUEST["pwd"];
$Edit_Id = $_REQUEST["Edit_Id"];


$upquery = "UPDATE test_table_1 SET name ='$name',email = '$email',pwd = '$pwd' WHERE id =$Edit_Id";

$runUp = mysqli_query($connect,$upquery);

if($runUp==true){
    
   header("location: index.php?edited");
}



?>