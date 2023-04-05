<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Teacher_ID = $_POST['Teacher_ID'];
    $bonus_amount = $_POST['bonus_amount'];
    $teacher_field = $_POST['teacher_field'];
    $Tname = $_POST['Tname'];
    $Tsurname = $_POST['Tsurname'];
    $Taddress = $_POST['Taddress'];
    $Tmobile = $_POST['Tmobile'];
    $Temail = $_POST['Temail'];


    $sql = "UPDATE Teacher SET bonus_amount='$bonus_amount',teacher_field='$teacher_field',Tname='$Tname',Tsurname='$Tsurname',Taddress='$Taddress',Tmobile='$Tmobile',Temail='$Temail' WHERE Teacher_ID='$Teacher_ID'";
    if (mysqli_query($link, $sql)) {
        echo "Record has been uptaded.";
    } else {
        echo "Error uptading record ";
    }

}

?>