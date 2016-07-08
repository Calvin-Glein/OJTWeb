<?php
//Step1
 $db = mysqli_connect('localhost:3307','root','1234','scorecard')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
     
     
     
     
 <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "1234";
    $dbname = "scorecard";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
     
     
     
     if(!move_uploaded_file($_FILES['file']['tmp_name'], 'uploadedCSV/' . "csat.csv")){
         die('Error uploading file - check destination is writeable.');
         
         
     }

     
      $sql = "LOAD DATA LOCAL INFILE 'uploadedCSV/escalation.csv' INTO TABLE scorecard.escalation FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY'\n' IGNORE 1 LINES  (@date, fullname, escalation) SET date = STR_TO_DATE(@date, '%m/%d/%Y');"; 
     
    if (mysqli_multi_query($conn, $sql)) {
        echo "added the data";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
     
     
    ?>

     

</body>
</html>




