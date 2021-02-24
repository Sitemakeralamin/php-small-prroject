<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit test</title>
</head>
<body>
   
   
   <?php
    include("db_connect.php");
    
    if(isset($_REQUEST["edit_id"])){
        
        $edit_ID = $_REQUEST["edit_id"];
    }
    
    $select = "SELECT * FROM test_table_1 WHERE ID =$edit_ID";
    $runSelt = mysqli_query($connect,$select);
    if($runSelt==true){
        
        while($myData = mysqli_fetch_array($runSelt)){  ?>
           
           
         <form action="edit_core.php" method="post">
       
        <input type="text" name="name" value="<?php echo $myData["name"];?>" placeholder="Enter your name">
        <input type="email" name="email" value="<?php echo $myData["email"];?>" placeholder="Enter your email">
        <input type="text" name="pwd" value="<?php echo $myData["pwd"];?>" placeholder="Enter your password">
        <input type="hidden" name="Edit_Id" value="<?php echo $myData["id"];?>">
        <input type="submit" name="upBtn" value="Update Data">
        
        
        
        </form>
            
       <?php } } ?>
    
    
     
</body>
</html>