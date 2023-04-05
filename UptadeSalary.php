<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Salary_ID = $_POST['Salary_ID'];
    $salary_amount = $_POST['salary_amount'];
    $workingTimes = $_POST['workingTimes'];


    $sql = "UPDATE Salary SET Salary_ID='$Salary_ID',salary_amount='$salary_amount' WHERE workingTimes='$workingTimes'";
    if (mysqli_query($link, $sql)) {
        echo "Record has been uptaded.";
    } else {
        echo "Error uptading record ";
    }

}

?>