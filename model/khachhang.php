<?php
 function checkemail($email){
    $sql="select *from khach_hang where email='".$email."' ";
    $kh=pdo_query_one($sql);
    return $kh;
 }
 function checkuser($mat_khau,$ho_ten){
    $sql="select *from khach_hang where ho_ten='".$ho_ten."' and mat_khau='".$mat_khau."'";
    $kh=pdo_query_one($sql);
    return $kh;
 }
function insert_khachhang($mat_khau,$ho_ten,$kich_hoat,$email,$vai_tro){
    $sql = "INSERT INTO khach_hang(mat_khau,ho_ten,kich_hoat,email,vai_tro) VALUES('$mat_khau','$ho_ten','$kich_hoat','$email','$vai_tro') ";
    pdo_execute($sql);
}
function insert_khachhang_dk($mat_khau,$ho_ten,$kich_hoat,$email){
    $sql = "INSERT INTO khach_hang(mat_khau,ho_ten,kich_hoat,email) VALUES('$mat_khau','$ho_ten','$kich_hoat','$email') ";
    pdo_execute($sql);
}
function loadall_khachhang(){
    $sql = "SELECT * FROM khach_hang ORDER BY id_kh desc";
    $listkhachhang  =pdo_query($sql);
    return  $listkhachhang ;
}
function delete_khachhang($id_kh){
    $sql= "delete  from khach_hang where id_kh=".$_GET['id_kh'];
    pdo_execute($sql);
}
function loadone_khachhang($id_kh){
    $sql="select * from khach_hang where id_kh=".$id_kh;
    $khachhang=pdo_query_one($sql);
    return $khachhang;
}
function update_khachhang($id_kh,$mat_khau,$ho_ten,$kich_hoat,$email,$vai_tro){
   
        $sql = "update khach_hang set mat_khau='".$mat_khau."',ho_ten='".$ho_ten."',kich_hoat='".$kich_hoat."',email='".$email."',vai_tro='".$vai_tro."' where id_kh= ".$id_kh;    
    pdo_execute($sql);
}
function update_khachhang_dk($id_kh,$mat_khau,$ho_ten,$kich_hoat,$email){
    $sql = "update khach_hang set mat_khau='".$mat_khau."',ho_ten='".$ho_ten."',kich_hoat='".$kich_hoat."',email='".$email."' where id_kh= ".$id_kh;    
    pdo_execute($sql);
}





?>