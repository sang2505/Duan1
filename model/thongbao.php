<?php
    function get_new_tb(){
        $sql = "SELECT * FROM thongbao ORDER BY id DESC limit 5";
        return pdo_query($sql);
     }
?>