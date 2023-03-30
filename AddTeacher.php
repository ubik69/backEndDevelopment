<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Tname = $_POST['Tname'];
    $Tsurname = $_POST['Tsurname'];
    $Taddress = $_POST['Taddress'];
    $Tmobile = $_POST['Tmobile'];
    $Temail = $_POST['Temail'];


    $sql = "INSERT INTO Teacher (Tname,Tsurname,Taddress,Tmobile,Temail) VALUES ('$Tname','$Tsurname','$Taddress','$Tmobile','$Temail')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>