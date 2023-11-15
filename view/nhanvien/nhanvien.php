<?php
    $html_dsnv='';
    foreach ($dsnv as $nv) {
        extract($nv);
        $updatenv="index.php?pg=updatenv&id=".$id;
        $deletenv="index.php?pg=deletenv&id=".$id;

        $html_dsnv.= '<tbody>
        <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$chucVu.'</td>
          <td>'.$hoTen.'</td>
          <td>'.$ngaySinh.'</td>
          <td>'.$gioiTinh.'</td>
          <td>'.$diaChi.'</td>
          <td>'.$soDienThoai.'</td>
          <td>'.$email.'</td>
          <td><a href="'.$updatenv.'"><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Sửa Thông Tin Nhân Viên</button></a></td>
          <td><a href="'.$deletenv.'"><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Xóa Nhân Viên</button></a></td>
          
        </tr>
      </tbody>';
    }
 ?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">

    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <h1> Nhân Viên </h1>
        <div class="card">
            <div class="card-body" style="display: flex;">
                <h5 class="card-title m-b-0">Nhân Viên Hiện Có</h5>
                <div class="btncalam" style="margin-left: 800px;">
                    <a href="index.php?pg=addnv"><button
                            style="border-radius: 5px; border: 1px solid blue; coler:gray;">Thêm Nhân viên</button></a>

                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?=$html_dsnv; ?>
                <!-- <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Chi Tiết</button></td>
                                    </tr>
                                  </tbody> -->
            </table>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->