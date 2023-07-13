<?php
function loadall_binhluan(){
    $sql = "SELECT * FROM binh_luan  ORDER BY id_bl desc";
    $listbinhluan =pdo_query($sql);
    return $listbinhluan;
}
function loadall_binhluan_form($id_hh){
    $sql = "SELECT * FROM binh_luan where id_hh='".$id_hh."' ORDER BY id_bl desc";
    $listbinhluan =pdo_query($sql);
    return $listbinhluan;
}
function insert_binhluan($noi_dung,$id_hh,$id_kh,$ngay_bl){
    $sql = "insert into binh_luan(noi_dung,id_hh,id_kh,ngay_bl) VALUES('$noi_dung','$id_hh','$id_kh','$ngay_bl') ";
    pdo_execute($sql);
}
function delete_binhluan($id_bl){
    $sql= "delete  from binh_luan where id_bl=".$_GET['id_bl'];
    pdo_execute($sql);
}


?>