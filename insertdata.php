
<?php
include "dbcont.php";

$id=$_POST['f_id'];
$nam=$_POST['f_nam'];
$des=$_POST['f_des'];
$pri=$_POST['f_pri'];
$qn=$_POST['f_qn'];
$pc=$_POST['f_PCD'];
$cat=$_POST['f_cat'];
$md=$_POST['f_mfd'];
$ed=$_POST['f_ex'];





$smt = "SELECT * FROM product WHERE ID='$id'";
$result= $conn->query($smt);
if($result->num_rows==0)
{
	$sql = "INSERT INTO product (Name,Description,Purchase_price,Quantity,p_code,mfg_date,expiry_date,category) 
		VALUES ('$nam', '$des', '$pri','$qn','$pc','$md','$ed','$cat' )";

		
		if($conn->query($sql))
		{
			header('location:user.php');	
		}
		else
		{
			echo "insertion failed";
		}
}
else{
	echo "username already exits try another";
	//header("Location:registration.php");
	
	}

$conn->close();
?>

