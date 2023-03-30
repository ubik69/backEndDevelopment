<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px">Teacher ID<br><hr></th>
				<th width="250px">Teacher First Name<br><hr></th>
				<th width="250px">Teacher Last Name<br><hr></th>
        <th width="250px">Teacher Address<br><hr></th>
        <th width="150px">Teacher Mobile<br><hr></th>
        <th width="150px">Teacher Email<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT Teacher_ID,Tname,Tsurname,Taddress,Tmobile,Temail FROM Teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Teacher_ID']}</th>
				<th>{$row['Tname']}</th>
				<th>{$row['Tsurname']}</th>
        <th>{$row['Taddress']}</th>
        <th>{$row['Tmobile']}</th>
        <th>{$row['Temail']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


