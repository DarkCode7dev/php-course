 =====================injection.php=====================================
 

<form method = "POST" enctype = "multipart/form-data">
    UserId:<input type="text" name="userid" value="" />
    <br/> Password:<input type="text" name="password" value="" />
    
   <br/> <input type="submit" value="Login" />
    
    
    
</form>
<?php
if(isset($_POST['userid']))
{
    $userid= $_POST['userid'];
    $password=$_POST['password'];
    $link= mysqli_connect("localhost","root","","dac");
    $query ="select * from login_detail where Name ='$userid' and Password ='$password'";
    echo $query;
    echo "<br/>";
    
    $result= mysqli_query($link,$query);
     
    if(mysqli_num_rows($result)){
        echo "Login Successful";
    }
    else {
        echo "Login unsuccessful!";    
    }
    
}

?>
===========================
 ======comment============insert ==these ===values===to see==insertion====   ===========================
 Name ='DEVESH' and Password ='0' or '0'='0'
 and
 Name ='DEVESH'#' and Password =''
