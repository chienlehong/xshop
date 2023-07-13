<?php 
if(is_array($khachhang)){
    extract($khachhang);
}


?>
<div class="row">
    <div class="row header">
        <h1> Cập nhật  khách hàng</h1>
    </div>
    <div class="row formcontent">
    <form action="index.php?act=updatekh" method="post"  >
   
        <div class="row mb10"> Mã khách hàng
            <input type="text" name="id_kh" value="<?=$id_kh?>" disabled>
        </div>
        <div class="row mb10">Tên khách hàng
            <input type="text" name="ho_ten" value="<?=$ho_ten?>" required>
        </div>
        <div class="row mb10">Mật khẩu
            <input type="text" name="mat_khau" value="<?=$mat_khau?>" required>
        </div>
        <div class="row mb10">Kích hoạt
            <input type="text" name="kich_hoat" value="<?=$kich_hoat?>" required>
        </div>
        
        <div class="row mb10">Email
            <input type="email" name="email" value="<?=$email?>" required>
        </div>
        
        <div class="row mb10">Vai trò 
            <input type="text" name="vai_tro" value="<?=$vai_tro?>" required>
        </div>
        
        
      
        <div class="row mb10">
            <input type="hidden" name="id_kh" value="<?=$id_kh?>">
            <input type="submit" name="capnhat" value="Cập Nhật">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=dskh"> <input type="button" value="Danh sách"></a>

        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>