<?php require_once("../includes/config.php"); ?>

<?php
$message = '';
	if (isset($_POST["section_class"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$MALOPHOCPHAN = $_POST["MALOPHOCPHAN"];
		$TENLOPHOCPHAN = $_POST["TENLOPHOCPHAN"];
		$MAMONHOC = $_POST["MAMONHOC"];
		$MAGIANGVIEN = $_POST["MAGIANGVIEN"];
		$MATHOIGIAN = $_POST["MATHOIGIAN"];

		$SQL = "SELECT * FROM lophocphan WHERE MALOPHOCPHAN = '$MALOPHOCPHAN'";
		$QUERY = mysqli_query($conn,$SQL);
		$NUM = mysqli_num_rows($QUERY);
	

		if($NUM > 0)
        {
	        echo "<script>alert('Đã có lớp học phần này!'); window.location='section_class.php'</script>";
	        exit;
        } 
        else
        {
           $sql = "INSERT INTO lophocphan VALUES ('$MALOPHOCPHAN', '$TENLOPHOCPHAN', '$MAMONHOC', '$MAGIANGVIEN', '$MATHOIGIAN')";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		   mysqli_query($conn,$sql);

		   $message = "<script>alert('Tạo lớp học phần thành công!');</script>";
	    }



		
	}

?>
<!DOCTYPE html>
<html>
	<head>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class="container" style="width:100%; max-width:600px">
			
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Tạo lớp học phần</h4></div>
				<div class="panel-body">
					
					<form action="section_class.php" method="POST">
						
						
						<div class="form-group">
							<label>Mã lớp học phần</label>
							<input type="text" name="MALOPHOCPHAN" class="form-control" required />
						</div>

						<div class="form-group">
							<label>Tên lớp học phần</label>
							<input type="text" name="TENLOPHOCPHAN" class="form-control" required />
						</div>

						
						<div class="form-group">
							<label>Mã môn học</label>
							<?php
							$sql = mysqli_query($conn,"select * from monhoc") or die(myqli_error($conn));
							if (mysqli_num_rows($sql) > 0) {
							$i=0;
							?>
							<select class="form-control" name = "MAMONHOC">
								<option></option>
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
								<option></option>
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
								<option></option>
								<?php while($row=mysqli_fetch_assoc($sql)) {
								$i++; ?>

								<option><?php echo $row['MATHOIGIAN']; ?></option>
								<?php }}  ?>
							</select>
						</div>


						<div class="form-group" >
							<input type="submit" name="section_class"  value="Tạo lớp học phần" class="btn btn-info" style="margin-top: 25px; margin-left: 0px;"/>
						</div>
						
						<?php echo $message; ?>
					</form>
					
				</div>
			</div>
		</div>
		
	</body>
</html>