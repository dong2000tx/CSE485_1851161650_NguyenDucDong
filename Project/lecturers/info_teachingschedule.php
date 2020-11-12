<?php require_once("../includes/config.php");?>

<?php
	/*$sql = "SELECT MAKHGD, MAGIANGVIEN, MALOPHOCPHAN, NGAY, THU, DIADIEM, THOIGIAN, NOIDUNG 
	        FROM kehoachgiangday";
	$query = mysqli_query($conn,$sql);
    */

	$sql = "SELECT MALTTT, MAKHGD, MAGIANGVIEN, MALOPHOCPHAN, NGAY, THU, DIADIEM, THOIGIAN, NOIDUNG 
	        FROM lichtrinhthucte";
	$query = mysqli_query($conn,$sql);


?>

<?php
	if (isset($_GET["id_delete"])) {
		

		$sql = 'DELETE FROM lichtrinhthucte WHERE MAKHGD LIKE "' . $_GET["id_delete"] .'"';

		mysqli_query($conn,$sql);
		
		echo "<script>alert('Xóa thành công !'); window.location='info_teachingschedule.php'</script>";
		exit;
		
	}

	
?>

<!DOCTYPE html>
	<html>
		<head>
				
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		<body>
	        <table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">Mã LTTHTT</th>
			      <th scope="col">Mã KHGDDK</th>
			      <th scope="col">Mã GV</th>
			      <th scope="col">Mã LHP</th>
			      <th scope="col">Ngày</th>
			      <th scope="col">Thứ</th>
			      <th scope="col">Địa điểm</th>
			      <th scope="col">Thời gian</th>
			      <th scope="col">Nội dung</th>
			      <th scope="col">Sửa</th>
			      <th scope="col">Xóa</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
		            while ( $data = mysqli_fetch_array($query)) {
				       $MAKHGD = $data['MAKHGD'];
				       $MALTTT = $data['MALTTT'];
			           
	            ?>

			    <tr>
			      <th scope="row"><?php echo $data['MALTTT']; ?></th>
			      <td><?php echo $data['MAKHGD']; ?></td>
			      <td><?php echo $data['MAGIANGVIEN']; ?></td>
			      <td><?php echo $data['MALOPHOCPHAN']; ?></td>
			      <td><?php echo $data['NGAY']; ?></td>
			      <td><?php echo $data['THU']; ?></td>
			      <td><?php echo $data['DIADIEM']; ?></td>
			      <td><?php echo $data['THOIGIAN']; ?></td>
			      <td><?php echo $data['NOIDUNG']; ?></td>
			      <td><a href="edit_teachingschedule1.php?id1=<?php echo $MALTTT;?>">Sửa</a></td>
			      <td><a href="info_teachingschedule.php?id_delete=<?php echo $MAKHGD;?>">Xóa</a></td>

			    </tr>
			    <?php } ?>
			  </tbody>
			</table>

	    </body>
	</html>