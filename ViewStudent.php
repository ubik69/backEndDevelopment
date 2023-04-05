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
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                    <a href="ViewContact.php">Contact</a>
                    <a href="ViewGymMember.php">Gym</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.html">Student</a>
                    <a href="AddParent.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass.html">Class</a>
                    <a href="AddGymMember.php">Gym</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="DeleteStudent.html">Student</a>
                  <a href="DeleteParent.html">Parent</a>
                  <a href="DeleteTeacher.html">Teacher</a>
                  <a href="DeleteClass.html">Class</a>
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
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">student ID<br><hr></th>
				<th width="250px">Student First Name<br><hr></th>
				<th width="250px">Student Last Name<br><hr></th>
                <th width="100px">Student's Parent ID<br><hr></th>
                <th width="100px">Student's Class ID<br><hr></th>
                
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT Sid,Sname,Ssurname,Parent_ID,Class_ID FROM Student1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Sid']}</th>
				<th>{$row['Sname']}</th>
				<th>{$row['Ssurname']}</th>
                <th>{$row['Parent_ID']}</th>
                <th>{$row['Class_ID']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>
