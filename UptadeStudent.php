<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Sid=$_POST['Sid'];
    $Sname=$_POST['Sname'];
    $Ssurname=$_POST['Ssurname'];
    $Sbirthday=$_POST['Sbirthday'];

    $uptade = "UPDATE Student1 SET Sname = '$Sname' ,Ssurname = '$Ssurname',Sbirthday='$Sbirthday' WHERE Sid= '$Sid'";
    if(mysqli_query($link,$uptade)){

        echo"Record has been uptaded.";

    }else{
        echo"Error uptading record.";
    }

}

?>