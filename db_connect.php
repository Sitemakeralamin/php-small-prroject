<?php


    $host = "localhost";
    $dbUser = "root";
    $dbpwd = "";
    $dbName="test_table";


$connect = mysqli_connect($host,$dbUser,$dbpwd,$dbName);

if($connect==false){
    
    echo "Error connection";
}

?>