<h2>目標頁面</h2>

<?php

$a[]=null;
if (empty($a)){
    echo"真";
}else{
    echo "假";
}
// isset()
// 上方()沒有反應，因為沒有被宣告
// 以下為第二階段，上方isset()內需要有需要在括號內傳入該變數的名稱
// if (isset($var1, $var2, $var3)) {
    // $var1, $var2, $var3 都存在且不為 null 的程式碼

// 看筆記 第一階段 省略這四行


if(!empty ($_GET)){
    echo"以下資料為GET表單的資料<br>";
    echo"<pre>";
    print_r($_GET);
    echo"</pre>";
}
if(!empty($_POST)){
    echo "以下資料為POST表單的資料<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}


?>

