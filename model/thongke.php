<?php
  function loadall_thongke(){
    $sql="select loai.id_ma_loai as id_ma_loai,loai.ten_loai as ten_loai,count(hang_hoa.id_hh) as counthh, min(hang_hoa.don_gia) as mindon_gia, max(hang_hoa.don_gia) as maxdon_gia, avg(hang_hoa.don_gia) as avgdon_gia   ";
    $sql.="from hang_hoa left join loai on loai.id_ma_loai=hang_hoa.id_ma_loai ";
 $sql.="group by loai.id_ma_loai order by loai.id_ma_loai desc";
 $listtk=pdo_query($sql);
 return $listtk;
}
?>