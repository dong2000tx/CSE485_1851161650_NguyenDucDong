<?php
include('../includes/config.php');
$message = '';
if(isset($_GET['activation_code']))
{

	$MAKICHHOAT = $_GET['activation_code'];


	$sql = "
		SELECT * FROM taikhoan
		WHERE MAKICHHOAT = '$MAKICHHOAT'
	";
	
	$query = mysqli_query($conn,$sql);

    $no_of_row = mysqli_num_rows($query);

	if($no_of_row > 0)
	{
		$row = mysqli_fetch_array($query);
		
			if($row['TRANGTHAI'] == 'CHUAXACMINH')
			{
				$update_query = "
				UPDATE taikhoan
				SET TRANGTHAI = 'DAXACMINH'
				WHERE ID = '".$row['ID']."'
				";

				$statement = mysqli_query($conn,$update_query);


					$message = "<script>alert('Địa chỉ Email của bạn được xác minh thành công!');</script>";

				
			}
			else
			{
				$message = "<script>alert('Địa chỉ Email của bạn đã được xác minh');</script>";


			}
		
	}
	else
	{
		$message = "<script>alert('Liên kết không lợp lệ');</script>";
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Register Login Script with Email Verification</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class="container">
			<h1 align="center">PHP Register</h1>
			
			<h3><?php echo $message; ?></h3>
			
		</div>
		
	</body>
	
</html>