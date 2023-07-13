<?php
session_start();
include ("../../model/pdo.php");
include ("../../model/binhluan.php");
 $id_hh=$_REQUEST['id_hh'];
 $dsbl=loadall_binhluan_form($id_hh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/style.css">
<style>
    .binhluan table{
        width:90%;
        margin-left:5%
    }
    .binhluan table td:nth-child(1){
        width:50%
    }
    .binhluan table td:nth-child(2){
        width:20%
    }
    .binhluan table td:nth-child(3){
        width:30%
    }

</style>
</head>
<body>
    


<div class="row mb">
                   <div class="boxtitle">Bình luận</div>
                   <div class="boxcontent2 binhluan">
                       <ul>
                        <table>
                        <?php
                        foreach($dsbl as $ds){
                            extract($ds);
                           echo'<tr><td>'.$noi_dung.'</td>';
                           echo'<td>'.$id_kh.'</td>';
                           echo' <td>'.$ngay_bl.'</td></tr>';
                        }
                        ?>
                       </table>
                       </ul>

                   </div>
                   <div class="boxfooter searbox">
                       <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <input type="hidden" name="id_hh" value="<?=$id_hh?>">
                         <?php 
                         if(isset($_SESSION['ho_ten'])){
                            extract($_SESSION['ho_ten']);
                        
                         ?>
                         
                         <input type="text" name="noi_dung" required >
                           <input type="submit" name="guibinhluan" value="Gửi bình luận">
                        <?php
                         }else{
                        ?>
                        <p class="tb"> vui lòng đăng nhập mới được bình luận </p>
                        <?php 
                        }?>
                       </form>
                   </div>
                   <?php
                   if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                     
                    $noi_dung=$_POST['noi_dung'];
                     $id_hh=$_POST['id_hh'];
                     $id_kh=$_SESSION['ho_ten']['id_kh'];
                     $ngay_bl=date('h:i:sa d/m/Y');
                     insert_binhluan($noi_dung,$id_hh,$id_kh,$ngay_bl);
                    header("Location:".$_SERVER['HTTP_REFERER']);
                   }
                   ?>

               </div>
    </body>
</html>