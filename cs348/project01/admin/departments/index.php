<?php include "../../include/config.php"; ?>
<?php include "../../include/header.php"; ?>
<p>Hello Administrator. Below is the list of departments:<p>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Head</th>
		<th>Actions</th>
	</tr>
	<?php

		$result = mysql_query("SELECT * FROM Departments");

		while($row = mysql_fetch_array($result))
		{
			echo "<tr>\n";
			echo "<td>" . $row['DepartmentID'] . "</td>\n";
			echo "<td>" . $row['Name'] . "</td>\n";
			echo "<td>" . $row['HeadName'] . "</td>\n";
			echo "<td><a href=\"" . $RootDirectory . "admin/departments/edit.php?id=" . $row['DepartmentID'] . "\">Edit</a></td>\n";
			echo "</tr>\n";
		}

	?>
</table>
<div class="home">
	<a href="<?=$RootDirectory?>">Click here to return home</a>
</div>
<?php include "../../include/footer.php"; ?>