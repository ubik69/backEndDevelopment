<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $gymMemberID = $_POST['gymMemberID'];
    $gymFullName = $_POST['gymFullName'];
    $memberType = $_POST['memberType'];


    $sql = "UPDATE Gym SET gymFullName='$gymFullName',memberType='$memberType' WHERE gymMemberID='$gymMemberID'";
    if (mysqli_query($link, $sql)) {
        echo "Record has been uptaded.";
    } else {
        echo "Error uptading record ";
    }

}

?>