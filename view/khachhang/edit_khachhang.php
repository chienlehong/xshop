<div class="row mb">
            <div class="boxtrai mr ">
              <div class="row mb">
                
                <div class="boxtitle">Cập nhật tài khoản</div>
                  <div class="row boxcontent formtaikhoan">
                    <?php 
                    if(isset($_SESSION['ho_ten'])&&(is_array($_SESSION['ho_ten']))){
                        extract($_SESSION['ho_ten']);
                      
                     }
 
                    ?>
                        <form action="index.php?act=edit_khachhang" method="post"  >
                          <div class="row mb10"> Tên đăng nhập<input type="text" name="ho_ten" value="<?=$ho_ten?>" required></div> 
                          <div class="row mb10">   Mật khẩu<input type="password" name="mat_khau" value="<?=$mat_khau?>" required></div>
                          <div class="row mb10">    Kích hoạt<input type="text" name="kich_hoat" value="<?=$kich_hoat?>" required></div>
                         
                          <div class="row mb10">  Email<input type="email" name="email" value="<?=$email?>" required></div>
                          
                          <input type="hidden" name="id_kh" value="<?=$id_kh?>">
                          <input type="submit" name="capnhat" value="Cập nhật">
                            <input type="reset" value="nhập lại"></div>
                        </form>
                        <h2 class="thongbao">
                        <?php 
                       
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                        ?>
                        </h2>
                   </div>
              </div>
              
             
                      </div>
           <div class="boxphai">
           <?php
            include "view/boxphai.php";
            ?>
           </div>
    </div>
