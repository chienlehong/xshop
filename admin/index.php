<?php
include ("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/binhluan.php");
include("../model/thongke.php");
include("../model/khachhang.php");

include ("header.php");
//controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'adddm':
            //kiem tra nguoi dung co click vao add hay khong
            if(isset($_POST['them_moi'])&&($_POST['them_moi'])){
                $ten_loai = $_POST['ten_loai'];
                insert_danhmuc($ten_loai);
                $thongbao = "Them thanh cong";
            }
          include ("danhmuc/add.php");
            break;
        case 'listdm':
            $listdanhmuc =loadall_danhmuc();
            include ("danhmuc/listdm.php");
            break;
        case 'xoadm':
            if(isset($_GET['id_ma_loai'])&&($_GET['id_ma_loai']>0)){
               delete_danhmuc($_GET['id_ma_loai']); 
            }
            $listdanhmuc =loadall_danhmuc();
            include ("danhmuc/listdm.php");
            break;
        case 'suadm':
            if(isset($_GET['id_ma_loai'])&&($_GET['id_ma_loai']>0)){
                $dm=loadone_danhmuc($_GET['id_ma_loai']);
            }
            include ("danhmuc/update.php");
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $ten_loai = $_POST['ten_loai'];
                $id_ma_loai = $_POST['id_ma_loai'];
                update__danhmuc($ten_loai,$id_ma_loai);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc =loadall_danhmuc();
            include ("danhmuc/listdm.php");
            break;

            /* controler sanpham */

            case 'addsp':
                //kiem tra nguoi dung co click vao add hay khong
                if(isset($_POST['them_moi'])&&($_POST['them_moi'])){
                    $id_ma_loai=$_POST['id_ma_loai'];
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $giam_gia = $_POST['giam_gia'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $mo_ta = $_POST['mo_ta'];
                    $dac_biet = $_POST['dac_biet'];
        
                    insert_hanghoa($ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$id_ma_loai);
                    $thongbao = "Them thanh cong";
                }
                $listdanhmuc =loadall_danhmuc();
                include ("sanpham/add.php");
                break;
            case 'listsp':
                if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
                    $kyw=$_POST['kyw'];
                    $id_loai=$_POST['id_ma_loai'];
                }else{
                    $kyw='';
                    $id_loai=0;
                }
                $listdanhmuc =loadall_danhmuc();
                $listhanghoa =loadall_hanghoa($kyw,$id_loai);
                include ("sanpham/list.php");
                break;
            case 'xoasp':
                if(isset($_GET['id_hh'])&&($_GET['id_hh']>0)){
                   delete_hanghoa($_GET['id_hh']); 
                }
                $listhanghoa =loadall_hanghoa("",0);
                include ("sanpham/list.php");
                break;
            case 'suasp':
                if(isset($_GET['id_hh'])&&($_GET['id_hh']>0)){
                    $sanpham=loadone_hanghoa($_GET['id_hh']);
                }
                $listdanhmuc =loadall_danhmuc();
                include ("sanpham/update.php");
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_hh=$_POST['id_hh'];
                    $id_ma_loai=$_POST['id_ma_loai'];
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $giam_gia = $_POST['giam_gia'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $mo_ta = $_POST['mo_ta'];
                    $dac_biet = $_POST['dac_biet'];
                    update_hanghoa($id_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet);
                    $thongbao = "cập nhật thành công";
                }
                $listdanhmuc =loadall_danhmuc();
                $listhanghoa =loadall_hanghoa("",0);
                include ("sanpham/list.php");
                break;

                /* khach hang */
            case 'dskh':
                $listkhachhang =loadall_khachhang();
                    include ("khachhang/list.php");
                    break;
            case 'addkh':
                //kiem tra nguoi dung co click vao add hay khong
                if(isset($_POST['them_moi'])&&($_POST['them_moi'])){
                
                 $ho_ten = $_POST['ho_ten'];
                 $mat_khau = $_POST['mat_khau'];
                 $kich_hoat = $_POST['kich_hoat'];
                
                 $email = $_POST['email'];
                 $vai_tro = $_POST['vai_tro'];
                 
                
                 insert_khachhang($mat_khau,$ho_ten,$kich_hoat,$email,$vai_tro);
                 $thongbao = "Them thanh cong";
                        }
                        $listkhachhang =loadall_khachhang();
                        include ("khachhang/add.php");
                        break;

                case 'xoakh':
                    if(isset($_GET['id_kh'])&&($_GET['id_kh']>0)){
                     delete_khachhang($_GET['id_kh']); 
                    }
                    $listkhachhang =loadall_khachhang();
                    include ("khachhang/list.php");
                            break;
                 case 'suakh':
                   if(isset($_GET['id_kh'])&&($_GET['id_kh']>0)){
                   $khachhang=loadone_khachhang($_GET['id_kh']);
                     }
                     $listkhachhang =loadall_khachhang();
                    include ("khachhang/update.php");
                    break;
                case 'updatekh':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                     $id_kh=$_POST['id_kh'];
                     $mat_khau = $_POST['mat_khau'];
                     $ho_ten = $_POST['ho_ten'];
                     $kich_hoat = $_POST['kich_hoat'];
                     
                     $email = $_POST['email'];
                     $vai_tro = $_POST['vai_tro'];
                     
                     update_khachhang($id_kh,$mat_khau,$ho_ten,$kich_hoat,$email,$vai_tro);
                     $thongbao = "cập nhật thành công";
                        }
                        $listkhachhang =loadall_khachhang();
                        include ("khachhang/list.php");
                        break;
                        /* bình luận*/
                        case 'dsbl':
                            $listbinhluan =loadall_binhluan();
                                include ("binhluan/list.php");
                                break;
                     case 'xoabl':
                      if(isset($_GET['id_bl'])&&($_GET['id_bl']>0)){
                           delete_binhluan($_GET['id_bl']); 
                      }
                      $listbinhluan =loadall_binhluan();
                       include ("binhluan/list.php");
                     break;
               
         case 'thongke':
           $listthongke = loadall_thongke();
              include ("thongke/list.php");
             break;
             case 'bieudo':
                $listthongke = loadall_thongke();
                   include ("thongke/bieudo.php");
                  break;

           

    

        default:
            include ("content.php");
            break;
    }

}else {
    include("content.php");
}
include ("footer.php");
?>