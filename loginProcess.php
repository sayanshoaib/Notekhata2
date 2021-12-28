<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(   isset($_POST['myemail']) 
        && isset($_POST['mypassword'])
        && !empty($_POST['myemail'])
        && !empty($_POST['mypassword'])
    ){
        $email=$_POST['myemail'];
        $pass=$_POST['mypassword'];
       
        try{
            $conn=new PDO("mysql:host=localhost:3306; dbname=Notekhata;", "root", "");
          
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $enc_password = md5($pass);
            
            $myquerystring = "SELECT EMAIL, PASSWORD FROM userlist WHERE EMAIL = '$email' and PASSWORD = '$enc_password'";

            $returnobj = $conn->query($myquerystring);

            
            if($returnobj->rowCount()==1){
                
                session_start();
                $_SESSION['myemail'] = $email;
                //echo $_SESSION['myemail'];
            

                
                ?>
                    <script>location.assign("home.php");</script>
                <?php
            }
            else {
                ?>
                    <script>location.assign("login.php");</script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("login.php");</script>
            <?php
        }
            
    }
    else{
       
        ?>
            <script>location.assign("login.php");</script>
        <?php
        
    } 
    }
else {
    
    ?>
        <script>location.assign("login.php");</script>
    <?php
}
?>  
