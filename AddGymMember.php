<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
                     background-image: url(backback.png);
           padding-bottom: 500px;
           background-size: cover;
           background-position: center;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: right;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

            .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: dimgrey;
                transition: linear 0.25s;
            }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <img src="rishton.png" />
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">
                    View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                    <a href="ViewContact.php">Contact</a>
                    <a href="ViewGymMember.php">Gym</a>
                    <a href="ViewSalary.php">Salary</a>

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.html">Student</a>
                    <a href="AddParent.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass.html">Class</a>
                    <a href="AddGymMember.php">Gym</a>
                    <a href="AddSalary.html">Salary</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    Delete
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="DeleteStudent.html">Student</a>
                    <a href="DeleteParent.html">Parent</a>
                    <a href="DeleteTeacher.html">Teacher</a>
                    <a href="DeleteClass.html">Class</a>
                    <a href="DeleteGymMember.html">Gym</a>
                    <a href="DeleteSalary.html">Salary</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    Uptade
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="UptadeStudent.html">Student</a>
                    <a href="UptadeParent.html">Parent</a>
                    <a href="UptadeTeacher.html">Teacher</a>
                    <a href="UptadeClass.html">Class</a>
                    <a href="UptadeGym.html">Gym</a>
                    <a href="UptadeSalary.html">Salary</a>
                </div>
            </div>

            <a href="Contact.html">Contact Us</a>
        </div>
<h1>Gym Member Add Page</h1>
        <div>
            <br>
            <form method="post" action="AddGymMember.php">

          <label for="Sid">Student ID:</label>
          <input required type="text" name="Sid" /><br /><br />
    	  <label for="gymFullName">Enter full name :</label>
    	  <input required type="text" name="gymFullName"><br><br>
          <label for="userRegDate">Register Date:</label>
          <input required type="date" name="userRegDate"><br><br>
          <label for="memberType">Member Type:</label>
          <select required id="memberType" name="memberType">
              <option value="bronzeMember">Bronze</option>
              <option value="silverMember">Silver</option>
              <option value="goldMember">Gold</option>
              <option value="diamondMember">Diamond</option>
          </select> <br><BR>
          <label for="medicalCondition">Medical Condition (if there're any)</label>
          <input type="text" name="medicalCondition"><br>

    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
<?php

$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
if ($link === false) {
    die("Connection failed: ");
}
$memberType = $_POST['memberType'];               /* getting the member type from input */
$gymMemberID = $_POST['gymMemberID'];             /* getting the member id for ending date */

if($memberType=="bronzeMember"){
    $endingDate=date_create("now");
    date_add($endingDate,date_interval_create_from_date_string("30 days"));
    echo"Your membership will expire on ";
    echo date_format($endingDate,"Y-m-d");
}elseif($memberType=="silverMember"){
    $endingDate=date_create("now");
    date_add($endingDate,date_interval_create_from_date_string("60 days"));
    echo"Your membership will expire on ";
    echo date_format($endingDate,"Y-m-d");
}elseif($memberType=="goldMember"){
    $endingDate=date_create("now");
    date_add($endingDate,date_interval_create_from_date_string("90 days"));
    echo"Your membership will expire on ";
    echo date_format($endingDate,"Y-m-d");
}elseif($memberType=="diamondMember"){
    $endingDate=date_create("now");
    date_add($endingDate,date_interval_create_from_date_string("180 days"));
    echo"Your membership will expire on ";
    echo date_format($endingDate,"Y-m-d");
}



if (isset($_POST['submit'])) {

    $Sid=$_POST['Sid'];
    $gymFullName = $_POST['gymFullName'];
    $userRegDate = $_POST['userRegDate'];
    $memberType = $_POST['memberType'];
    $medicalCondition = $_POST['medicalCondition'];

   

    $gym = "INSERT INTO Gym (Sid,gymFullName,userRegDate,memberType,medicalCondition) VALUES ('$Sid','$gymFullName','$userRegDate','$memberType','$medicalCondition')";
    if (mysqli_query($link, $gym)) {
      echo "<br><br>New record created successfully";
    } else {
      echo "<br><br>Error adding record ";
    }


}

?>
    </body>
</html>