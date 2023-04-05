<?php
    $connection = mysqli_connect("sdb-57.hosting.stackcp.net","student84-353031351c89","ua92-studentAc","student84-353031351c89");
    // Checking connection here
    if($connection === false){
        die("Connection failed: ");
    }

    if(isset($_POST['submit'])){


        $Salary_ID = $_POST['Salary_ID'];


        $delete= "DELETE FROM Salary WHERE Salary_ID=$Salary_ID";

        if(mysqli_query($connection,$delete)){

            echo"Record has been deleted.";

        }else{
            echo"Error deleting record.";
        }

        }



?>