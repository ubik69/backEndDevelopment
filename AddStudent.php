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

    $Sname = $_POST['Sname'];
    $Ssurname = $_POST['Ssurname'];
   
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $send = "INSERT INTO Student1 (Sname,Ssurname) VALUES ('$Sname','$Ssurname')";
    if (mysqli_query($link, $send)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>