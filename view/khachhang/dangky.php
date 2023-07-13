<div class="row mb">
            <div class="boxtrai mr ">
              <div class="row mb">
                r
                <div class="boxtitle">Đăng ki thành viên</div>
                  <div class="row boxcontent formtaikhoan">
                        <form action="index.php?act=dangky" method="post" >
                          <div class="row mb10"> Tên đăng nhập<input type="text" name="ho_ten" required></div> 
                          <div class="row mb10">   Mật khẩu<input type="password" name="mat_khau" required></div>
                          <div class="row mb10">    Kích hoạt<input type="text" name="kich_hoat" required></div>
                          
                          <div class="row mb10">  Email<input type="email" name="email" required></div>
                          
                          <div class="row mb10">  <input type="submit" name="dangky" value="Đăng Ký">
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
