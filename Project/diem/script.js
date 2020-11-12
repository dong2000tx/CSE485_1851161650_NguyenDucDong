$(document).ready(function() {
    $("#sel_name").change(function() {
        var id = $(this).val();
        $.ajax({
            url: 'getDiem.php',
            type: 'post',
            data: {
                ID: id
            },
            dataType: 'json',
            success: function(response) { 
                $("#tb_detail").empty(); 
                for (var i = 0; i < response.length; i++) {
                    var mahocphan = response[i]['MAHOCPHAN']; 
                    var tenhocphan = response[i]['TENHOCPHAN']; 
                    var sotinchi = response[i]['SOTINCHI'];
                    var lanhoc = response[i]['LANHOC'];
                    var lanthi = response[i]['LANTHI'];
                    var danhgia = response[i]['DANHGIA'];
                    var quatrinh = response[i]['QUATRINH'];
                    var thi = response[i]['THI'];
                    var tkhp = response[i]['TKHP'];
                    var diemchu = response[i]['DIEMCHU'];
                    
                    $("#tb_detail").append(
                        `<tr>
                            <td>${mahocphan}</td>
                            <td>${tenhocphan}</td>
                            <td>${sotinchi}</td>
                            <td>${lanhoc}</td>
                            <td>${lanthi}</td>
                            <td>${danhgia}</td>
                            <td>${quatrinh}</td>
                            <td>${thi}</td>
                            <td>${tkhp}</td>
                            <td>${diemchu}</td>
                        </tr>`);
                }
            } 
        });
    });
});

