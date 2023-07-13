<div class="row">
    <div class="row header">
        <h1> Thêm Mới tài khoản</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addkh" method="post" >
        
        <div class="row mb10">Tên đăng nhập
            <input type="text" name="ho_ten" required>
        </div>
        <div class="row mb10">Mật khẩu
            <input type="text" name="mat_khau" required>
        </div>
        <div class="row mb10">Kich hoạt
            <input type="text" name="kich_hoat" required>
        </div>
        
        <div class="row mb10">Email
            <input type="email" name="email" required>
        </div>
        <div class="row mb10">Vai_tro
        <input type="text" name="vai_tro" required>
            
        </div>
        
       
        
        <div class="row mb10">
            <input type="submit" name="them_moi" value="Thêm Mới">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=dskh"> <input type="button" value="Danh sách"></a>

        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>