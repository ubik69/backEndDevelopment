<html>
<body> 

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
                
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT Sid,Sname,Ssurname FROM Student1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Sid']}</th>
				<th>{$row['Sname']}</th>
				<th>{$row['Ssurname']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


