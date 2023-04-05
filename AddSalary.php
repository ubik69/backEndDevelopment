<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Teacher_ID = $_POST['Teacher_ID'];
    $salary_amount = $_POST['salary_amount'];
    $workingTimes = $_POST['workingTimes'];


    $sql = "INSERT INTO Salary (Teacher_ID,salary_amount,workingTimes) VALUES ('$Teacher_ID','$salary_amount','$workingTimes')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record ";
    }

}

?>