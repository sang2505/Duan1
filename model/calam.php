<?php
    function get_list_cl(){
        $sql = "SELECT * FROM calam ORDER BY id DESC";
        return pdo_query($sql);
    }

    function insert_calam($tencl ,$timestart ,$timeend){
        $sql="INSERT INTO calam(tenCaLam,gioBatDau,gioKetThuc) values('$tencl','$timestart','$timeend')";
        pdo_execute($sql);

    }

    function delete_cl($id){
        $sql="delete from calam where id=".$id;
        pdo_execute($sql);
    }
?>