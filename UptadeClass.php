<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Class_ID = $_POST['Class_ID'];
    $classYear = $_POST['classYear'];
    $capacity = $_POST['capacity'];


    $sql = "UPDATE Class SET classYear='$classYear',capacity='$capacity' WHERE Class_ID='$Class_ID'";
    if (mysqli_query($link, $sql)) {
        echo "Record has been uptaded.";
    } else {
      echo "Error uptading record ";
    }

}

?>