<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Parent_ID = $_POST['Parent_ID'];
    $Pname = $_POST['Pname'];
    $Psurname = $_POST['Psurname'];
    $Paddress = $_POST['Paddress'];
    $Pemail = $_POST['Pemail'];

    $sql = "UPDATE Parent SET Pname='$Pname',Psurname='$Psurname',Paddress='$Paddress',Pemail='$Pemail' WHERE Parent_ID='$Parent_ID'";
    if (mysqli_query($link, $sql)) {
        echo "Record has been uptaded.";
    } else {
        echo "Error uptading record ";
    }

}

?>