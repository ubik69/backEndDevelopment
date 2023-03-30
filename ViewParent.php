<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>	
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
				<th width="250px">Parent Surname<br><hr></th>
				<th width="350px">Parent Address<br><hr></th>
				<th width="200px">Parent Email<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Parent_ID, Pname , Psurname , Paddress , Pemail  FROM Parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Parent_ID']}</th>
				<th>{$row['Pname']}</th>
                <th>{$row['Psurname']}</th>
				<th>{$row['Paddress']}</th>
				<th>{$row['Pemail']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

