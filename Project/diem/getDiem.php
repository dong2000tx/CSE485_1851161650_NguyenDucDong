<?php
include "../includes/config.php";
$id = 0; 
if (isset($_POST['ID'])) { 
    $id = mysqli_real_escape_string($conn, $_POST['ID']);
} 
$id_arr = array();
if ($id > 0) {
    $sql = "SELECT ID, MAHOCPHAN, TENHOCPHAN, SOTINCHI, LANHOC, LANTHI, DANHGIA, QUATRINH, THI, TKHP, DIEMCHU, HOCKY FROM diem WHERE ID='$id'" ;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['ID'];
        $mahocphan = $row['MAHOCPHAN'];
        $tenhocphan = $row['TENHOCPHAN'];
        $sotinchi = $row['SOTINCHI'];
        $lanhoc = $row['LANHOC'];
        $lanthi = $row['LANTHI'];
        $danhgia = $row['DANHGIA'];
        $quatrinh = $row['QUATRINH'];
        $thi = $row['THI'];
        $tkhp = $row['TKHP'];
        $diemchu = $row['DIEMCHU'];
        $hocky = $row['HOCKY'];
        $id_arr[] = array("ID" => $id, "MAHOCPHAN" => $mahocphan, "TENHOCPHAN" => $tenhocphan, "SOTINCHI" => $sotinchi, "LANHOC" => $lanhoc, "LANTHI" => $lanthi,
        "DANHGIA" => $danhgia, "QUATRINH" => $quatrinh, "THI" => $thi, "TKHP" => $tkhp,  "DIEMCHU" => $diemchu, "HOCKY" => $hocky);
    }
}
echo json_encode($id_arr);