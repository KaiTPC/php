<h1>表單傳值</h1>
<h3>GET</h3>
<form action ="target.php" method="get">
<input type="text" name="map" id="">
<input type="submit" value="送出">

<h3>POST</h3>
<form action="targrt.php" method="post">
<input type="text" name="name" id="name">
<input type="submit" value="送出">

<h3>post檔案及上傳</h3>
<form action="target.php" method="post" encytype="multipart/form-data">
<input type="text" name="type">
<input type= "file" name="img" id="">
<input type="submit" value="送出">
</form>

<h2>目標頁面</h2>
<?php
// 陣列內 可直接使用
// get與post不可以同時使用
echo $_GET['addr'];
echo$



if(isset($_GET)){
    echo"真";
    print_r($_GET);

    $age=$_GET['age'];
    echo "年紀為".$age."<br>";
    if($age>=45){
        echo"屬於中高齡";
    }else if($age>=35){
    echo
    }
    }

?>