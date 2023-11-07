<?php
	include "dbcont.php";

	// Initialize variables for search
	$searchName = "";
	$minPrice = "";
	$maxPrice = "";

	if (isset($_POST['submit'])) {
		$searchName = $_POST["searchName"];
		$minPrice = $_POST["minPrice"];
		$maxPrice = $_POST["maxPrice"];

		$searchQuery = "SELECT * FROM product WHERE 1";

		if (!empty($searchName)) {
			$searchQuery .= " AND Name LIKE '%$searchName%'";
		}

		if (!empty($minPrice)) {
			$searchQuery .= " AND Purchase_price >= $minPrice";
		}

		if (!empty($maxPrice)) {
			$searchQuery .= " AND Purchase_price <= $maxPrice";
		}

		$result = $conn->query($searchQuery);
	}
	else {
		// Default query to display all products
		$s = "SELECT * FROM product";
		$result = $conn->query($s);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse: collapse;
			border: 2px solid black;
		}
		table{
			width: 80%;
			margin: 0 auto;
		}
		td, th{
			padding: 15px;
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
		<h1>Product Data</h1>

		<!-- Add a search form -->
		<form method="post" action="user.php">
			<input type="text" name="searchName" placeholder="Search by Name">
			<input type="number" name="minPrice" placeholder="Min Price">
			<input type="number" name="maxPrice" placeholder="Max Price">
			<input type="submit" name="submit" value="Search">
		</form>

		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Purchase Price</th>
				<th>Quantity</th>
				<th>Product Code</th>
				<th>category </th>
				<th>mfg_date</th>
				<th>expiry_date</th>
				
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			$cnt=0;
			while($r = $result->fetch_assoc()) {
				$cnt++; 
				$id = $r['ID'];
				$nam = $r['Name'];
				$des = $r['Description'];
				$pri = $r['Purchase_price'];
				$qn = $r['Quantity'];
				$PCD= $r['p_code'];
				$cat= $r['category'];
				$mfd= $r['mfg_date'];
				$ex= $r['expiry_date'];
				
				

				echo "<tr>";
				echo "<td>". $cnt . "</td>";
				echo "<td>". $nam . "</td>";
				echo "<td>". $des . "</td>";
				echo "<td>". $pri . "</td>";
				echo "<td>". $qn  . "</td>";
				echo "<td>". $PCD  . "</td>";
				echo "<td>". $cat  . "</td>";
				echo "<td>". $mfd  . "</td>";
				echo "<td>". $ex  . "</td>";
				


				echo "<td> <a style='text-decoration:none;color:green;font-weight:bold' href='edit.php?edit_id=$id'><button style='background-color:green;border:none;border-radius:5px;padding:3px;width:60px;color:white;'>EDIT</button</a></td>";
				echo "<td> <a onClick=\" javascript: return confirm('Are you sure to delete this?') \" style='text-decoration:none;color:red;font-weight:bold' href='delete.php?del_id=$id'><button style='background-color:red;border:none;border-radius:5px;padding:3px;width:60px;color:white;'>DELETE</button></a></td>";
				echo "</tr>";
			}
			?>
		</table>
		<br><br>
		<a href="product_form.php"><button style="background-color:#0c3294;border:none;padding:6px;border-radius:10px;color:white;">Insert New Data</button></a>
	</center>
</body>
</html>
