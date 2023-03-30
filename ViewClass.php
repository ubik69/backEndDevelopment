<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student84-353031351c89", "ua92-studentAc", "student84-353031351c89");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Classes</h3>
	
		<table>	
		
			<tr>
				<th width="150px">Class ID<br><hr></th>
				<th width="250px">Class Name<br><hr></th>
				<th width="170px">Class Capacity<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Class_ID , className , capacity FROM Class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Class_ID']}</th>
				<th>{$row['className']}</th>
                <th>{$row['capacity']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

