<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        include('connexion/cn.php');
     
        
       
        $email = $_REQUEST['email'];
        $date = date("Y-m-d h:i:sa") ; 
    
        $sql = "INSERT INTO `newsletter`( `mail`, `date`) VALUES ('".$email."','".$date."')";
          
        if(mysql_query( $sql)){
         echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?suc=succes" </SCRIPT>';
         

        } else{
            echo "ERROR: Hush! Sorry $sql. " ;
              
        }

        ?>
    </center>
</body>
  
</html>