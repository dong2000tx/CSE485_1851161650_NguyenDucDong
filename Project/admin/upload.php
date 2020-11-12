<?php 
include('../includes/config.php');


?>

<!DOCTYPE html>
    <html>
        <head>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
    <body>
        
    
    

    <?php
    $sqlSelect = "SELECT * FROM taikhoan";
    $result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class="table">
              <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Email</th>
                <th scope="col">Mã kích hoạt</th>
                <th scope="col">Quyền</th>
                <th scope="col">Trạng thái</th>

            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['ID']; ?></td>
            <td><?php  echo $row['TENTAIKHOAN']; ?></td>
            <td><?php  echo $row['MATKHAU']; ?></td>
            <td><?php  echo $row['EMAIL']; ?></td>
            <td><?php  echo $row['MAKICHHOAT']; ?></td>
            <td><?php  echo $row['QUYEN']; ?></td>
            <td><?php  echo $row['TRANGTHAI']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>


<?php 
} 
?>
    </body>
 </html>