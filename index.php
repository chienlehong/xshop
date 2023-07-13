<?php 
session_start();
  include "model/pdo.php";
  include "model/sanpham.php";
  include "model/danhmuc.php";
  include "model/khachhang.php";
  include "view/header.php";
  include "global.php";
  $hhnew=loadall_hanghoa_home();
  $dsdm=loadall_danhmuc();
  $dstop10=loadall_hanghoa_top10();
  
  if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'sanpham':   
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
             $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['id_ma_loai'])&&($_GET['id_ma_loai']>0)){
                $id_ma_loai=$_GET['id_ma_loai'];  
            }else{
                $id_ma_loai=0;
            }
                $dshh=loadall_hanghoa($kyw,$id_ma_loai);    
                 $tendm=load_tendm($id_ma_loai);
                 include "view/sanpham.php";
            break;


        case 'sanphamct':   
            if(isset($_GET['id_hh'])&&($_GET['id_hh']>0)){
                $id_hh=$_GET['id_hh'];
                $onesp=loadone_hanghoa($id_hh);
                extract($onesp);
                $sp_cung_loai=load_hanghoa_cungloai($id_hh,$id_ma_loai);
                
                include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
            break;
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $kich_hoat = $_POST['kich_hoat'];
                
                $email = $_POST['email'];
               
                insert_khachhang_dk($mat_khau,$ho_ten,$kich_hoat,$email);
                $thongbao = "Đăng ký thành công";
                 }
            include "view/khachhang/dangky.php";
            break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = $_POST['mat_khau'];
                    
                    $checkuser=checkuser($mat_khau,$ho_ten);
                     if(is_array($checkuser)){
                        $_SESSION['ho_ten']=$checkuser;
                       header('Loaction:index.php');
                       
                     }else{
                        $thongbao="tài khoản không tồn tại.";
                     }
                    }  
                include "view/khachhang/dangky.php";
                break;
                case 'edit_khachhang':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id_kh=$_POST['id_kh'];
                        $ho_ten = $_POST['ho_ten'];
                        $mat_khau = $_POST['mat_khau'];
                        $kich_hoat = $_POST['kich_hoat'];
                        
                        $email = $_POST['email'];
                        
                        update_khachhang_dk($id_kh,$mat_khau,$ho_ten,$kich_hoat,$email);
                        $_SESSION['ho_ten']=checkuser($mat_khau,$ho_ten);
                        header('Location: index.php?act=edit_khachhang');
                        $thongbao = "Cập Nhật Thành Côgg";
                         
                        }  
                    include "view/khachhang/edit_khachhang.php";
                    break;
                    case 'quenmk':
                        if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                        
                            $email = $_POST['email'];
                            $checkemail=checkemail($email);
                            if(is_array($checkemail)){
                                $thongbao="mật khẩu của bạn là :".$checkemail['mat_khau'];
                            }else{
                                $thongbao="email này không tồn tại";
                            }
                           
                               
                             
                            }  
                        include "view/khachhang/quenmk.php";
                        break;
             case 'thoat':
                session_unset();
                header('Locatin:index.php');
             
             break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
                break;


        default:
            include "view/home.php";
               break;
    }
  }else{
    include "view/home.php";
  }
  
  include "view/footer.php";

?>