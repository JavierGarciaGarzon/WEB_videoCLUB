<?php
    if(sizeof($users)>0){
		echo "<table><tr><th>nick</th><th>email</th></tr>";
		foreach($users as $row){
			echo "<tr>";
			echo "<td>" . $row->nick . "</td>";
			echo "<td>" . $row->email . "</td>";
			echo "</tr";
		}
		echo"</table>";
	}
?>
