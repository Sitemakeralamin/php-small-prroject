<?php


include("db_connect.php");

        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $pwd = $_REQUEST["pwd"];

        $profile= $_FILES["profile"];
        $pic_name= $profile["name"];
        $pic_type =  $profile["type"];
        $tmp_name= $profile["tmp_name"];

        //$pic_uniq = uniqid()."$pic_type";
        
        $pic_name = uniqid().".jpg";
        






move_uploaded_file($tmp_name,"avatar/".$pic_name);
    
    
   

    
    
    $insertQuery = "INSERT INTO test_table_1 (name,email,pwd,profile)VALUES('$name','$email','$pwd','$pic_name') ";

if($insertQuery==true){

$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){

header("location: index.php?save=Data Inserted!");
}else{
header("location: index.php?save=Data not Inserted!");
}

}
    




?>
