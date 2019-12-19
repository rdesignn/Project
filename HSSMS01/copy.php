<?php

$host_name = 'localhost';
$name = 'root';
$pass = '';
$db = 'sedata1';

session_start();
$con= mysqli_connect($host_name,$name,$pass) or die ('databae error!');
mysqli_select_db($con,$db);

if(isset($_POST['button'])){
    
        
         $email = $_POST['email'];
         $pass = $_POST['password'];
    
    
       $query =" select*from sedata where email='$email' AND password='$pass' ";
     $check = mysqli_query($con,$query);
    
      if($check){
          
        
        if(mysqli_num_rows($check) > 0){
            
            
            
            
          if($email=="s@com"){
              header("Location:confirmation.php");
          }else{
              header("Location:userr.php");
          }
              
            
        }else{
            
              echo"
                     <script>
                     
                     alert ('Email or passwor not correct');
                     window.location.href='2ndpart1.php';
                     
                     </script>
                     ";
            //email passowr check
        }
        
    }else{
        
          echo"
                     <script>
                     
                     alert ('Dtabase Error');
                     window.location.href='2ndpart1.php';
                     
                     </script>
                     ";
        //query else
    }
    
}else{
    //login click check
}



?>