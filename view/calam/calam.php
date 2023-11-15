<?php
    $html_dscl='';
    foreach ($dscl as $cl) {
        extract($cl);
        $updatecl="index.php?pg=updatecl&id=".$id;
        $deletecl="index.php?pg=deletecl&id=".$id;

        $html_dscl.= '<tbody>
        <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$tenCaLam.'</td>
          <td>'.$gioBatDau.'</td>
          <td>'.$gioKetThuc.'</td>
          <td><a href="'.$updatecl.'"><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Sửa Ca Làm</button></a></td>
          <td><a href="'.$deletecl.'"><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Xóa Ca Làm</button></a></td>
          
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
        <h1> Ca Làm </h1>
        <div class="card">
            <div class="card-body" style="display: flex;">
                <h5 class="card-title m-b-0">Ca Làm Hiện Tại</h5>
                <div class="btncalam" style="margin-left: 800px;">
                    <a href="index.php?pg=addcl"><button
                            style="border-radius: 5px; border: 1px solid blue; coler:gray;">Thêm Ca Làm</button></a>

                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tên ca làm</th>
                        <th scope="col">Giờ bắt đầu</th>
                        <th scope="col">Giờ kết thúc</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?=$html_dscl; ?>
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