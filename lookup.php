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

$poNum = $_POST["poNum"];

$sql = "SELECT po_num, po_line_num, po_dept_num, po_vendor_item_num, po_vendor_item_desc FROM po_extract WHERE po_num = $poNum;";
$result = $conn->query($sql);

echo "Showing results for PO: " .$poNum. ". </br>"; 

if ($result->num_rows > 0) {
	echo "
		<div class=\"table-responsive-vertical shadow-z-1\">
		<table id=\"table\" class=\"table table-hover \">
		<thead>
			<tr>
				<th>#</th>
				<th class=\"text-center\">PO Number</th>
				<th class=\"text-center\">PO Line Number</th>
				<th class=\"text-center\">Dept Number</th>
				<th class=\"text-center\">Vendor Item Number</th>
				<th>Vendor Item Description</th>
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
				<td class=\"text-center\">".$row["po_num"]."</td>
				<td class=\"text-center\">".$row["po_line_num"]."</td>
				<td class=\"text-center\">".$row["po_dept_num"]."</td>
				<td class=\"text-center\">".$row["po_vendor_item_num"]."</td>
				<td>".$row["po_vendor_item_desc"]."</td>
			</tr></div>";
			
		
	}
	echo "</tbody></table>";
} else {
	echo "0 results";
}
$conn->close();

?>