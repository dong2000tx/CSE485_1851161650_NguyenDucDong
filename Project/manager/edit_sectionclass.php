<?php require_once("../includes/config.php"); ?>


<!DOCTYPE html>
<html>
	<head>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

<?php
	if (isset($_POST["edit_sectionclass"])) {//name chỗ nút cập nhâtj
		//lấy thông tin từ các form bằng phương thức POST
		$MALOPHOCPHAN = $_POST["MALOPHOCPHAN"];
		$TENLOPHOCPHAN = $_POST["TENLOPHOCPHAN"];
		$MAMONHOC = $_POST["MAMONHOC"];
		$MAGIANGVIEN = $_POST["MAGIANGVIEN"];
		$MATHOIGIAN = $_POST["MATHOIGIAN"];
	
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql = "UPDATE lophocphan SET TENLOPHOCPHAN = '$TENLOPHOCPHAN', MAMONHOC = '$MAMONHOC', MAGIANGVIEN = '$MAGIANGVIEN', MATHOIGIAN = '$MATHOIGIAN' WHERE MALOPHOCPHAN = '$MALOPHOCPHAN'";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);

		echo "<script>alert('Cập nhật thành công!'); window.location='info_sectionclass.php'</script>";
	        exit;
       
	}
 
    $id = -1;
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}


	$sql = "SELECT * FROM lophocphan WHERE MALOPHOCPHAN = '$id'";
	$query = mysqli_query($conn,$sql);
      
 
?>


<div class="container" style="width:100%; max-width:600px">

    

	    <div class="panel panel-default">
				<div class="panel-heading"><h4>Cập nhật thông tin lớp môn học</h4></div>
				<div class="panel-body">
					<?php
		              while ( $data = mysqli_fetch_array($query) ) {
		              	
	                ?>
					<form action="edit_sectionclass.php" method="POST">
						

						
							<div class="form-group" >
								<label>Mã lớp học phần</label>
								<input type="text" name="MALOPHOCPHAN" class="form-control" required value="<?php echo $data['MALOPHOCPHAN']; ?>" readonly/>
							</div>

							<div class="form-group" >
								<label>Tên lớp học phần</label>
								<input type="text" name="TENLOPHOCPHAN" class="form-control" required value="<?php echo $data['TENLOPHOCPHAN']; ?>"/>
							</div>


							

							<div class="form-group">
								<label>Mã môn học</label>
								<?php
								$sql = mysqli_query($conn,"select * from monhoc") or die(myqli_error($conn));
								if (mysqli_num_rows($sql) > 0) {
								$i=0;
								?>
								<select class="form-control" name = "MAMONHOC">
									<option><?php echo $data['MAMONHOC']; ?></option>
									<?php while($row=mysqli_fetch_assoc($sql)) {
									$i++; ?>

									<option><?php echo $row['MAMONHOC']; ?></option>
									<?php }}  ?>
								</select>
						    </div>

							

							
							<div class="form-group">
								<label>Mã giảng viên</label>
								<?php
								$sql = mysqli_query($conn,"select * from giangvien") or die(myqli_error($conn));
								if (mysqli_num_rows($sql) > 0) {
								$i=0;
								?>
								<select class="form-control" name = "MAGIANGVIEN">
									<option><?php echo $data['MAGIANGVIEN']; ?></option>
									<?php while($row=mysqli_fetch_assoc($sql)) {
									$i++; ?>

									<option><?php echo $row['MAGIANGVIEN']; ?></option>
									<?php }}  ?>
								</select>
						    </div>


							
							<div class="form-group">
								<label>Mã thời gian</label>
								<?php
								$sql = mysqli_query($conn,"select * from thoigianhoc") or die(myqli_error($conn));
								if (mysqli_num_rows($sql) > 0) {
								$i=0;
								?>
								<select class="form-control" name = "MATHOIGIAN">
									<option><?php echo $data['MATHOIGIAN']; ?></option>
									<?php while($row=mysqli_fetch_assoc($sql)) {
									$i++; ?>

									<option><?php echo $row['MATHOIGIAN']; ?></option>
									<?php }}  ?>
								</select>
						    </div>
					    

					    

		                    <div class="form-group" >

									<input type="submit" name="edit_sectionclass" value="Cập nhật" class="btn btn-success" style="margin-top: 25px; margin-left: 0px;"/>
							</div>
					    
                                            
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
		
	</body>
</html>
