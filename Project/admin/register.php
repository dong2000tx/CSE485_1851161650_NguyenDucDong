<?php


include('../includes/config.php');




if(isset($_SESSION['ID']))
{
	header("location:index.php");
}

$message = '';

if(isset($_POST["register"]))
{


	$ID = $_POST['id'];
	$TENTAIKHOAN = $_POST['user_name'];
	$EMAIL = $_POST['user_email'];

	$SQL = "SELECT * FROM taikhoan WHERE ID = '$ID' OR TENTAIKHOAN = '$TENTAIKHOAN' OR EMAIL = '$EMAIL'";
		$QUERY = mysqli_query($conn,$SQL);
		$NUM = mysqli_num_rows($QUERY);
		
		
		

	if($NUM > 0)
    {
        echo "<script>alert('Đã tồn tại ID hoặc tên tài khoản hoặc email !'); window.location='register.php'</script>";
         exit;
        
    } 
    else
    {
       $EMAIL = $_POST['user_email'];

	$sql = "SELECT * FROM taikhoan WHERE EMAIL = '$EMAIL'";

	$query = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($query);


	if($num > 0)
	{
		$message = "<script>alert('Email đã thoát');</script>";
	}


	else
	{
		$MATKHAUSO = rand(100000,999999);
		$MATKHAUMAHOA = md5($MATKHAUSO);
		$MAKICHHOAT = md5(rand());
		
        
        $ID = $_POST['id'];
		$TENTAIKHOAN = $_POST['user_name'];
		$MATKHAU = $MATKHAUMAHOA;
		$EMAIL = $_POST['user_email'];
		$MAKICHHOAT = $MAKICHHOAT;
		$QUYEN = $_POST['user_level'];
		$TRANGTHAI = 'CHUAXACMINH';

		$insert_query = "
		INSERT INTO taikhoan 
		(ID, TENTAIKHOAN, MATKHAU, EMAIL, MAKICHHOAT, QUYEN, TRANGTHAI) 
		VALUES ('$ID', '$TENTAIKHOAN', '$MATKHAU', '$EMAIL', '$MAKICHHOAT', '$QUYEN', '$TRANGTHAI')
		";


		$query = mysqli_query($conn, $insert_query);


        if($_POST['user_level'] =="2")
        {

        	$MAQUANLY =	$_POST['id'];
			$TEN = $_POST['name'];
			$DIACHI = $_POST['address'];
			$SDT = $_POST['phone'];
				
            $insert_query1 = "INSERT INTO quanly(MAQUANLY, TEN, DIACHI, SDT) VALUES ('$MAQUANLY', '$TEN', '$DIACHI', '$SDT')";

            $query = mysqli_query($conn, $insert_query1);
		}


        else if($_POST['user_level'] =="3")
        {

        	$MAGIANGVIEN =	$_POST['id'];
			$TEN = $_POST['name'];
			$DIACHI = $_POST['address'];
			$SDT = $_POST['phone'];
				
            $insert_query2 = "INSERT INTO giangvien(MAGIANGVIEN, TEN, DIACHI, SDT) VALUES ('$MAGIANGVIEN', '$TEN', '$DIACHI', '$SDT')";

            $query = mysqli_query($conn, $insert_query2);
		}
		else if($_POST['user_level'] =="4")
        {

        	$MASINHVIEN =	$_POST['id'];
			$TEN = $_POST['name'];
			$DIACHI = $_POST['address'];
			$SDT = $_POST['phone'];
				
            $insert_query3 = "INSERT INTO sinhvien(MASINHVIEN, TEN, DIACHI, SDT) VALUES ('$MASINHVIEN', '$TEN', '$DIACHI', '$SDT')";

            $query = mysqli_query($conn, $insert_query3);
		}


        $base_url = "http://localhost:8080/k60ht/BTL/";  //change this baseurl value as per your file path
			$mail_body = "
			<p>Chào ".$_POST['user_name'].",</p>
			<p>Cảm ơn! Mật khẩu của bạn là ".$MATKHAUSO.". Mật khẩu này sẽ chỉ hoạt động sau khi xác minh email của bạn.</p>
			<p>Vui lòng mở liên kết này để xác minh địa chỉ email của bạn - ".$base_url."admin/email_verification.php?activation_code=".$MAKICHHOAT."
			<p><br />TLUer</p>
			";

        include('../sendmail.php');


	}
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
		<br />
		<div class="container" style="width:100%; max-width:600px">
			
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Tạo tài khoản</h4></div>
				<div class="panel-body" style="margin-left: -15px;">
					<form method="post" id="register_form">
						

						<div class="form-row">
							<div class="form-group col-md-3" >
								<label>ID</label>
								<input type="number" name="id" class="form-control" required />
							</div>
							<div class="form-group col-md-9">
								<label>Tên tài khoản</label>
								<input type="text" name="user_name" class="form-control" pattern="[a-zA-Z ]+" required style="margin-left: -18px;"/>
							</div>
					    </div>

					    <div class="form-row">
							<div class="form-group col-md-6">
								<label>Email</label>
								<input type="email" name="user_email" class="form-control" required />
							</div>


							<div class="form-group col-md-6">
								<label>Họ và tên</label>
								<input type="text" name="name" class="form-control" required style="margin-left: -18px;"/>
							</div>
                        </div>
						<div class="form-group col-md-12">
							<label>Địa chỉ</label>
							<input type="text" name="address" class="form-control" required />
						</div>

						<div class="form-group col-md-12">
							<label>Số điện thoại</label>
							<input type="text" name="phone" class="form-control" required />
						</div>


						<div class="form-row">
							<div class="form-group col-md-4" >
		                        <label>Quyền truy cập</label>
		                        
		                        
		                        <select name="user_level" class="form-control" class="form-group">
		                            <option></option>
		                            <option value="2">Quản lý</option>
		                            <option value="3">Giảng viên</option>
									<option value="4">Sinh viên</option>
		                        </select>
		                    </div>

		                    <div class="form-group" >

									<input type="submit" name="register" id="register" value="Tạo tài khoản" class="btn btn-info" style="margin-top: 25px; margin-left: 0px;"/>
							</div>
							<?php echo $message; ?>
					    </div>
                                            
					</form>
				</div>
			</div>
		</div>
	</body>
</html>