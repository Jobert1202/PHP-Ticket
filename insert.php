<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>

    <?php include "components/header.php" ?>

    <center>
        <?php

        // servername => localhost
        // username => root
        // password => root
        // database name => ticket_db
        $conn = mysqli_connect("localhost", "root", "root", "ticket_db");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $id =  $_REQUEST['ID'];
        $email = $_REQUEST['E-mail'];
        $platforms =  $_REQUEST['Platforms'];
        $region = $_REQUEST['Region'];
        $subject = $_REQUEST['Subject'];
        $description = $_REQUEST['Description'];
        $status = $_REQUEST['Status'];
        $date = $_REQUEST['Date'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tickets VALUES ('$id', 
            '$email','$platforms','$region','$subject',"$description","$status","$date")";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            echo nl2br("\n$id\n $email\n "
                . "$platforms\n $region\n  $subject\n $description\n $status\n $date");
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