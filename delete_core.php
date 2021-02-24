<?php

include("db_connect.php");

if(isset($_REQUEST["dlt_id"])){
    
    $delId =$_REQUEST["dlt_id"];


$delQuery = "DELETE FROM test_table_1 WHERE ID = $delId ";
$dltRun = mysqli_query($connect,$delQuery);
if(dltRun==true){
    
    header("location: index.php?deleted");
}



}

?>