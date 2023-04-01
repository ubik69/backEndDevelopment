<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $classYear = $_POST['classYear'];
    $capacity = $_POST['capacity'];
    $Teacher_ID = $_POST['Teacher_ID'];


    $sql = "INSERT INTO Class (classYear,capacity,Teacher_ID) VALUES ('$classYear','$capacity','$Teacher_ID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>