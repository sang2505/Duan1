<?php

include "model/pdo.php";
include "model/thongbao.php";
include "model/calam.php";
include "model/nhanvien.php";



include "view/header.php";
$dstb_new = get_new_tb();




    
    

    if (isset($_GET['pg'])) {
        $pg=$_GET['pg'];
        switch ($pg) {
            case 'calam':
                $dscl=get_list_cl();
             include "view/calam/calam.php";
                break;
            
            case 'addcl':
                    //kiem tra nguoi dung co click vao nut them moi hay khong?
                    if (isset($_POST['themcl']) && ($_POST['themcl'])) {
                        $tencl = $_POST['tencl'];
                        $timestart = $_POST['timestart'];
                        $timeend= $_POST['timeend'];
                        insert_calam($tencl ,$timestart ,$timeend);
                        $thongbao = "Thêm Ca Làm Mới Thành Công";

            }
            $listcl = get_list_cl();
            include "view/calam/addcl.php";
            break;

            case 'updatecl':
                include 'view/calam/updatecl.php';
                break;

            case 'deletecl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_cl($_GET['id']);
                }
                $listcl = get_list_cl();
                include "view/calam/calam.php";
                break;

            //nhanvien
            case'nhanvien':
                $dsnv=get_list_nv();
                include 'view/nhanvien/nhanvien.php';
                break;

            case 'addnv':
                  //kiem tra nguoi dung co click vao nut them moi hay khong?
                  if (isset($_POST['themnv']) && ($_POST['themnv'])) {
                    $hoten = $_POST['hoten'];
                    $chucvu = $_POST['chucvu'];
                    $ngaysinh = $_POST['ngaysinh'];
                    $gioitinh = $_POST['gioitinh'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $diachi = $_POST['diachi'];
                    $email = $_POST['email'];
                    insert_nhanvien($hoten ,$chucvu ,$ngaysinh, $gioitinh, $sodienthoai,$email, $diachi);
                    $thongbao = "Thêm Nhân Viên Mới Thành Công";

        }
            $listnv = get_list_nv();
            include "view/nhanvien/addnv.php";
                break;

            case 'deletenv';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_nv($_GET['id']);
            }
            $calam = get_list_cl();
            include "view/calam/calam.php";
            break;

            default:
            include "view/home.php";
            break;
            }
        

    }else{
        include "view/home.php";  
    }


    include "view/footer.php";
?>