<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "student84-353031351c89";
   $username  = "student84-353031351c89";
   $passwd = "ua92-studentAc";
   $dbname = "student84-353031351c89";
*/
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $gymFullName = $_POST['gymFullName'];
    $userRegDate = $_POST['userRegDate'];
    $memberType = $_POST['memberType'];
    $medicalCondition = $_POST['medicalCondition'];
   
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $gym = "INSERT INTO Gym (gymFullName,userRegDate,memberType,medicalCondition) VALUES ('$gymFullName','$userRegDate','$memberType','$medicalCondition')";
    if (mysqli_query($link, $gym)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>