<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['Pname'];
    $psurname = $_POST['Psurname'];
    $paddress = $_POST['Paddress'];
    $pemail = $_POST['Pemail'];


    $sql = "INSERT INTO Parent (Pname,Psurname,Paddress,Pemail) VALUES ('$pname','$psurname','$paddress','$pemail')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>