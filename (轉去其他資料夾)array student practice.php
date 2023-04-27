<style>
table{
    border-collapse: collapse;
    width: 50%;
}
td{
    padding: 5px 8px;
    border: 1px solid #032245;
}
</style>
<?php
// 建立一個二維陣列，用來儲存學生成績資料
$students = array(
    'Judy' => array(
        '國文' => 95,
        '英文' => 64,
        '數學' => 70,
        '地理' => 90,
        '歷史' => 84,
    ),
    'Amo' => array(
        '國文' => 88,
        '英文' => 78,
        '數學' => 54,
        '地理' => 81,
        '歷史' => 71,
    ),
    'John'=>array(
        '國文' => 45,
        '英文' => 60,
        '數學' => 68,
        '地理' => 70,
        '歷史' => 62,
    ),
    'Peter' =>array(
        '國文' => 59,
        '英文' => 32,
        '數學' => 77,
        '地理' => 54,
        '歷史' => 42,
    ),
    'Hebe'=>array(
        '國文' => 71,
        '英文' => 62,
        '數學' => 80,
        '地理' => 62,
        '歷史' => 64,
    )
);

// 顯示學生成績資料
echo '<table>';
echo '<tr><th>姓名</th><th>國文</th><th>英文</th><th>數學</th><th>地理</th><th>歷史</th></tr>';
foreach($students as $name => $scores){
    echo '<tr>';
    echo '<td>' . $name . '</td>';
    foreach($scores as $score){
        echo '<td>' . $score . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
