<?php
    $connection = mysqli_connect("sdb-57.hosting.stackcp.net","student84-353031351c89","ua92-studentAc","student84-353031351c89");
    // Checking connection here
    if($connection === false){
        die("Connection failed: ");
    }

    if(isset($_POST['submit'])){


        $gymMemberID = $_POST['gymMemberID'];

        $delete= "DELETE FROM Gym WHERE gymMemberID=$gymMemberID";

        if(mysqli_query($connection,$delete)){

            echo"Record has been deleted.";

        }else{
            echo"Error deleting record.";
        }

        }



?>