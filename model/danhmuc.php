<?php

function insert_danhmuc($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) VALUES('$ten_loai') ";
    pdo_execute($sql);
}
function delete_danhmuc($id_ma_loai){
    $sql= "delete  from loai where id_ma_loai=".$_GET['id_ma_loai'];
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM loai ORDER BY id_ma_loai desc";
    $listdanhmuc =pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id_ma_loai){
    $sql="select * from loai where id_ma_loai=".$id_ma_loai;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($ten_loai,$id_ma_loai){
    $sql = "update loai set ten_loai='".$ten_loai."' where id_ma_loai= ".$id_ma_loai;
    pdo_execute($sql);
}



?>