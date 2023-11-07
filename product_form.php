<html>

<head>
	<style>
		form{
			width: 28%;
			border: 2px solid black;
			padding: 10px;
			background-color: black;
			border-radius: 15px;
		}
		th,td{
			padding:15px;
			text-align:center;
			color: white;
		}
	</style>
</head>
<body>
<center>
		<h1>Insert Data</h1>
		<form method="POST" action="insertdata.php">
			<table>

				<tr>
					<th><label>Name</label></th>
					<td><input type="text" placeholder="Enter Name" name="f_nam"></td>
				</tr>

				<tr>
					<th><label>Description</label></th>
					<td><input type="text"  placeholder="Enter Description" name="f_des" ></td>
				</tr>

				<tr>
					<th><label>Purchase_price</label></th>
					<td><input type="text" placeholder="Enter price" name="f_pri"></td>
				</tr>

				<tr>
					<th><label>Quantity</label></th>
					<td><input type="text" placeholder="Enter your quantity" name="f_qn"></td>
				</tr>

				<tr>
					<th><label>Produt Code</label></th>
					<td><input type="text" placeholder="Enter your Code" name="f_PCD"></td>
				</tr>
				<tr>
					<th><label>MFG_Date</label></th>
					<td><input type="date" placeholder="Enter your MFG Date" name="f_mfd"></td>
				</tr>
				<tr>
					<th><label>Expiry_Date</label></th>
					<td><input type="date" placeholder="Enter your Expiry Date" name="f_ex"></td>
				</tr>
				<tr>
					<th><label>Catagory</label></th>
					<td><input type="text" placeholder="Enter your Catagory" name="f_cat"></td>
				</tr>
				
				<tr>
					
				 <th colspan="6"><a href="insert.php"><button style="background-color:#0c3294;border: none;padding: 6px;border-radius: 10px;color:white;">Insert Record</button>	</a></th>
			
				</tr>
			</table>

			
		</form>
	</center>	
</body>
</html>