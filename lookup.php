<?php

$servername = "cb3.ddns.net";
$username = "mainfreight";
$password = "mainfreight50";
$dbname = "mainfreight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT po_num, po_line_num, po_dept_num, po_vendor_item_num FROM po_extract WHERE po_num = \"1866693\";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "
		<div class=\"table-responsive-vertical shadow-z-1\">
		<table id=\"table\" class=\"table table-hover table-mc-light-blue\">
		<thead>
			<tr>
				<th>#</th>
				<th>Vendor Item Number</th>
				<th>PO Number</th>
				<th>PO Line Number</th>
				<th>Dept Number</th>
			</tr>
		</thead>
		<tbody>";

	// output data of each row
	$x=0;
	while($row = $result->fetch_assoc()) {
	$x++;
		echo 
			"<tr>
				<td>".$x."</td>
				<td>".$row["po_vendor_item_num"]."</td>
				<td>".$row["po_num"]."</td>
				<td>".$row["po_line_num"]."</td>
				<td>".$row["po_dept_num"]."</td>
			</tr></div>";
			
		
	}
	echo "</tbody></table>";
} else {
	echo "0 results";
}
$conn->close();

?>