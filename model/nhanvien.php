<?php 
function get_list_nv(){
        $sql = "SELECT * FROM nhanvien ORDER BY id DESC";
        return pdo_query($sql);
    }

        function insert_nhanvien($hoten ,$chucvu ,$ngaysinh, $gioitinh, $sodienthoai,$email,$diachi){
        $sql="INSERT INTO nhanvien(hoTen,chucVu,ngaySinh,gioiTinh,soDienThoai,email,diaChi) values('$hoten' ,'$chucvu' ,'$ngaysinh', '$gioitinh', '$sodienthoai','$email','$diachi')";
        pdo_execute($sql);

    }

    function delete_nv($id){
        $sql="delete from nhanvien where id=".$id;
        pdo_execute($sql);
    }

?>