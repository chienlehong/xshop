<?php

function insert_hanghoa($ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$id_ma_loai){
    $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,giam_gia,hinh,ngay_nhap,mo_ta,dac_biet,id_ma_loai) VALUES('$ten_hh','$don_gia','$giam_gia','$hinh','$ngay_nhap','$mo_ta','$dac_biet','$id_ma_loai') ";
    pdo_execute($sql);
}
function delete_hanghoa($id_ma_loai){
    $sql= "delete  from hang_hoa where id_hh=".$_GET['id_hh'];
    pdo_execute($sql);
}
function loadall_hanghoa_top10(){
    $sql = "SELECT * FROM hang_hoa where 1 order by so_luot_xem desc limit 0,10";
    $listhanghoa =pdo_query($sql);
    return $listhanghoa;
}
function loadall_hanghoa_home(){
    $sql = "SELECT * FROM hang_hoa where 1 order by id_hh desc limit 0,9";
    $listhanghoa =pdo_query($sql);
    return $listhanghoa;
}
function loadall_hanghoa($kyw="",$id_ma_loai=0){
    $sql = "SELECT * FROM hang_hoa where 1";
    if($kyw!=""){
        $sql.=" and ten_hh like '%".$kyw."%'";
    }
    if($id_ma_loai>0){
        $sql.=" and id_ma_loai=  '".$id_ma_loai."'";
    }
    $sql.= " ORDER BY id_hh desc";
    $listhanghoa =pdo_query($sql);
    return $listhanghoa;
}
function load_tendm($id_ma_loai){
    if($id_ma_loai>0){
    $sql="select * from loai where id_ma_loai=".$id_ma_loai;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $ten_loai;
    } else{
      return "";  
    }
}
function loadone_hanghoa($id_hh){
    $sql="select * from hang_hoa where id_hh=".$id_hh;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
}
function load_hanghoa_cungloai($id_hh,$id_ma_loai){
    $sql="select * from hang_hoa where id_ma_loai=".$id_ma_loai." and id_hh<>".$id_hh;
    $listhanghoa =pdo_query($sql);
    return $listhanghoa;
}
function  update_hanghoa($id_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet){
    if($hinh!=""){
        $sql = "update hang_hoa set ten_hh='".$ten_hh."',don_gia='".$don_gia."',giam_gia='".$giam_gia."',hinh='".$hinh."',ngay_nhap='".$ngay_nhap."',mo_ta='".$mo_ta."',dac_biet='".$dac_biet."' where id_hh= ".$id_hh;
    }else
        $sql = "update hang_hoa set ten_hh='".$ten_hh."',don_gia='".$don_gia."',giam_gia='".$giam_gia."',ngay_nhap='".$ngay_nhap."',mo_ta='".$mo_ta."',dac_biet='".$dac_biet."' where id_hh= ".$id_hh;
    
    pdo_execute($sql);
}


