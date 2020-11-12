<?php
    include "../includes/config.php";
    ?>
<!doctype html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="header">
            <header>
                <div class="title">
                    <span class="text_left">HỆ THỐNG ĐĂNG KÍ HỌC - ĐẠI HỌC THỦY LỢI </span>
                </div>
                
                <nav class="nav-right">
                    <ul>
                        <li><a href="../index.php">Trang chủ |</a></li>
                        <li><a href="../login.php">Thoát |</a></li>
                        <li><a href="../question.php" target="_blank">Hỏi đáp |</a></li>
                        <li><a href="../help.php" target="_blank">Trợ giúp</a></li>
                        <select>
                            <option value="">VN</option>
                        </select>
                    </ul>
                </nav>
                
                
                
                <div class="box-user">
                    <div class="info-user">
                        <p></p>
                    </div>
                </div>
            </header>
        </div>
        <div class="row" style="margin-top:100px;margin-left:20px;"><h4>Tra cứu điểm sinh viên</h4></div>
        
        
        <select id="sel_name"  style="margin-left:20px;">       
            <option value="0">- Học Kỳ -</option>
                <?php        

                $sql = "SELECT * FROM hocky";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $name = $row['HK'];
                    // Option
                    echo "<option value='" . $id . "' >" . $name . "</option>";
                }
                ?>
        </select>
        <div class="clear"></div>
            </br><table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Mã học phần</th>
                        <th>Tên học phần</th>
                        <th>Số tín chỉ</th>
                        <th>Lần học</th>
                        <th>Lần thi</th>
                        <th>Đánh giá</th>
                        <th>Quá trình</th>
                        <th>Thi</th>
                        <th>Tổng kết học phần</th>
                        <th>Điểm chữ</th>
                        
                    </tr>
                </thead>
                <tbody id="tb_detail">
                </tbody>
            </table>
        <script src="script.js"></script>  

        <div class="row" style="margin-top:260px;"></div>
        <footer>
    	<div class="footer-top">
    		<div class="footer-text">
    			<p>Đường dây nóng</p>
    			<p>024.38521441</p>
    		</div>
    		<div class="footer-navbar">
    			<nav class="f-navbar">
					<ul>
						<li><a href="">Trang chủ |</a></li>
						<li><a href="login.html">Đăng nhập |</a></li>
						<li><a href="">Hỏi đáp |</a></li>
						<li><a href="">Trợ giúp</a></li>
					</ul>
			    </nav>
    		</div>
    	</div>
    	<div class="footer-bottom">
    		<div class="social">
    			<nav class="social-navbar">
					<ul>
						<li><a href="1.html"><img src="../images/img1.png"> In trang này</a></li>
						<li><a href=""><img src="../images/img2.png"> Gửi email trang này</a></li>
						<li><a href=""><img src="../images/img3.png"> Thêm vào ưu thích</a></li>
					</ul>
			    </nav>
    		</div>
    		<div class="footer-info">
    			<p><a href="">Số người đang online:</a> 59</p>
    			<p>Lượt truy cập: 123589</p>
    		</div>
    	</div>
    	

    </footer>
        
</body>
</html>