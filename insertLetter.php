<!DOCTYPE html>
<html>

<head>
    <title>Mail Sent</title>
</head>

<body>
    <center>
        <?php
  
        
        $conn = mysqli_connect("localhost", "root", "", "polycom");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $date= date('Y-m-d H:i:s');
        $visitor_name= $_POST['name']; 
        $visitor_email= $_POST['email']; 
        $visitor_subject= $_POST['message']; 
   
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO `contact`( `dateheure`, `nom`, `email`, `message`)  VALUES ('".$date."', '".$visitor_name."', 
            '".$visitor_email."','".$visitor_subject."')";
          
        if(mysqli_query($conn, $sql)){
            echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="contact.php?succ=succes" </SCRIPT>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>