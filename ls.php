<?php

// Create connection
include "dbhinc.php";
$sql = "SELECT * FROM daycare WHERE Concat (region,name) LIKE '%".$_POST['name']."%'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
				  <td>".$row['id']."</td>
		          <td>".$row['name']."</td>
		          <td>".$row['phone']."</td>
					<td>".$row['region']."</td>
					
              		<td>".$row['address']."</td>
					
		         
              
             
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>