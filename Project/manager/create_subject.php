<?php require_once("../includes/config.php"); ?>
<?php
$message = '';
	if (isset($_POST["create_subject"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$MAMONHOC = $_POST["MAMONHOC"];
		$TENMONHOC = $_POST["TENMONHOC"];
		$MANGANHHOC = $_POST["MANGANHHOC"];
		$SOTIN = $_POST["SOTIN"];
		

        $SQL = "SELECT * FROM monhoc WHERE MAMONHOC = '$MAMONHOC'";
		$QUERY = mysqli_query($conn,$SQL);
		$NUM = mysqli_num_rows($QUERY);

        if($NUM > 0)
        {
	        echo "<script>alert('Đã có môn học này!'); window.location='create_subject.php'</script>";
	        exit;
        } 
        else
        {
            $sql = "INSERT INTO monhoc VALUES ('$MANGANHHOC', '$MAMONHOC', '$TENMONHOC', '$SOTIN')";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		    mysqli_query($conn,$sql);

		    $message = "<script>alert('Tạo môn học thành công!');</script>";
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
				<div class="panel-heading"><h4>Tạo môn học</h4></div>
				<div class="panel-body">
					
					<form action="create_subject.php" method="POST">
						
						
						<div class="form-group">
							<label>Mã môn học</label>
							<input type="text" name="MAMONHOC" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Tên môn học</label>
							<input type="text" name="TENMONHOC" class="form-control" required/>
						</div>
						<div class="form-group">
							<label>Mã ngành học</label>
							<?php
							$sql = mysqli_query($conn,"select * from nganhhoc") or die(myqli_error($conn));
							if (mysqli_num_rows($sql) > 0) {
							$i=0;
							?>
							<select class="form-control" name = "MANGANHHOC">
								<option></option>
								<?php while($row=mysqli_fetch_assoc($sql)) {
								$i++; ?>

								<option><?php echo $row['MANGANHHOC']; ?></option>
								<?php }}  ?>
							</select>
						</div>
						
						<div class="form-group">
								<label>Số tín chỉ</label>
								<select name="SOTIN" class="form-control" class="form-group">
									<option></option>
		                            <option>1 tín</option>
		                            <option>2 tín</option>
		                            <option>3 tín</option>
		                            <option>4 tín</option>
		                            
		                        </select>
						</div>

						<div class="form-group" >
							<input type="submit" name="create_subject"  value="Tạo môn" class="btn btn-info" />
						</div>
						
						<?php echo $message; ?>
					</form>
					
				</div>
			</div>
		</div>
		
	</body>
</html>