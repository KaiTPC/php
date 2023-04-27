<?php
$acc='admin';
$pw='1234';

// $_POST['acc'] $_POST['pw'] 第一階段


if($_POST['acc'])==$acc &&$_POST['pw']==$pw){
 echo"帳密正確，登入成功";
}else{

     header("location:login.php?error=密碼錯誤，登入失敗");

    
}
// 在表頭加入php 傳參數

?>