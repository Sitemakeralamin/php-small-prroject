<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test table </title>
</head>
<body>
    
    <?php
    if(isset($_REQUEST["save"])){
        
        echo $_REQUEST["save"];
        
    } 
    
    
    ?>
    
    <form action="test_table_core.php" method="post" enctype="multipart/form-data">
       
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="pwd" placeholder="Enter your password">
        
       
        <input type="file" name="profile">
        <input type="submit" name="submit" value="Save Data">
     
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <form action="search.php" method="post">
        <input type="text" name="search" placeholder="search user name" value="<?php echo $search ?>">
        <input type="submit" name="srcBtn" value="Search">
        
        
    </form>
    
    <br>
    <br>
    <br>
    
    
    <?php
    
    if(isset($_REQUEST["deleted"])){
        
        echo"<font color = 'red'>Data has been deleted</font>";
    }else if(isset($_REQUEST["edited"])){
        
       echo"<font color = 'green'>Data  Edited sucessfully</font>";
    }
    
    
    
    ?>
    
    <table border="1px solid green">
        <tr>
            <th>S.N</th>
            <th>Db_Id</th>
            <th>name</th>
            <th>email</th>
            <th>profile</th>
            <th>password</th>
            <th>date</th>
            <th>action</th>
        </tr>
        
        <?php
 
        include("db_connect.php");
        
        $selectQuery = "SELECT * FROM test_table_1";
        $runselect = mysqli_query($connect,$selectQuery);
        if($runselect==true){
             $Scount = 1;  
            while($mydata = mysqli_fetch_array($runselect)){  ?>
             
                  <tr>
            <td><?php echo $Scount;$Scount++; ?></td>
            <td><?php echo $mydata["id"]; ?></td>
            <td><?php echo $mydata["name"]; ?></td>
           
            
            
            <td><?php echo $mydata["email"]; ?></td>
            
 <td><center><img width="60px" height="60px" src="avatar/<?php echo $mydata["profile"];?>" ></center></td>
            
            <td><?php echo $mydata["pwd"]; ?></td>
            <td><?php echo $mydata["date"]; ?></td>
                      <td><a href="edit_test.php?edit_id=<?php echo $mydata["id"];?>" >Edit</a> || <a   onclick=" return confirm('Are you sure this data delete?');"href="delete_core.php?dlt_id=<?php echo $mydata["id"];?>">Delete</a></td>
        </tr>
          
           <?php } } ?>
        
    
        
        
    </table>
    
    
    
    

    
</body>
</html>