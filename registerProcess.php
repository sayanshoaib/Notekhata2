<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(   isset($_POST['myusername']) 
       && isset($_POST['myemail'])
       && isset($_POST['myinstitute'])
       && isset($_POST['mypassword'])
       && !empty($_POST['myusername'])
       && !empty($_POST['myemail'])
       && !empty($_POST['myinstitute'])
       && !empty($_POST['mypassword'])
    ){
        
        $username = $_POST['myusername'];
        $email = $_POST['myemail'];
        $institute = $_POST['myinstitute'];
        $pass = $_POST['mypassword'];
        
       
        try{
            $conn=new PDO("mysql:host=localhost:3306; dbname=Notekhata", "root", "");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";
            
            $enc_password = md5($pass);
            
            
            $signupquery = "INSERT INTO `userlist`(`USER_NAME`, `EMAIL`, `INSTITUE`, `PASSWORD`) VALUES ('$username','$email',' $institute','$enc_password')";
            
            
            $conn->exec($signupquery);
            
            ?>
                <script>location.assign("login.php");</script>
            <?php
            
            
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("register.php");</script>
            <?php
        }
        
    }
    else{
       
    ?>
        <script>location.assign("register.php");</script>
    <?php
        
    } 
}
else{
   
    
    echo '<script>location.assign("register.php");</script>';
}


?>