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

    $sql = "INSERT INTO scorecard (date, fullname, team, e2e, disputed, missed_tickets, fyr, total_tickets, controllable_miss, call_registration)
    VALUES (now(), '$_POST[fullname]','$_POST[team]', '$_POST[e2e]','$_POST[disputed]','$_POST[missed_tickets]','$_POST[fyr]','$_POST[total_tickets]','$_POST[controllable_miss]','$_POST[call_registration]');";
//    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//    VALUES ('Mary', 'Moe', 'mary@example.com');";
//    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//    VALUES ('Julie', 'Dooley', 'julie@example.com')";

    if (mysqli_multi_query($conn, $sql)) {
        echo "added the data";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
     
     
    ?>

     

</body>
</html>





//adding rows in mysql

// <?php
//    $servername = "localhost:3307";
//    $username = "root";
//    $password = "1234";
//    $dbname = "scorecard";

//     Create connection
//    $conn = mysqli_connect($servername, $username, $password, $dbname);
//     Check connection
//    if (!$conn) {
//        die("Connection failed: " . mysqli_connect_error());
//    }
//
//    $sql = "INSERT INTO fullname (fullname, employee_id)
//    VALUES ('july', '8');";
////    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//    VALUES ('Mary', 'Moe', 'mary@example.com');";
//    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//    VALUES ('Julie', 'Dooley', 'julie@example.com')";

//    if (mysqli_multi_query($conn, $sql)) {
//        echo "New records created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    }

  //  mysqli_close($conn);
//    ?>
