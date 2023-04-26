<style>

    table{
    
        border-collapse:collapse;
        padding: 5px 10px;
    }

</style>
<h2>月曆</h2>
<?php
$today = strtotime("now");
$month = date("n");
$days = date("t");
$firstDate = date("Y-n-1");
$finalDate = date("Y-n-t");
$firstDateWeek = date("w", strtotime($firstDate));

echo "<h2 style='text-align:center;'>月曆</h2>";
echo "月" . $month;
echo "<br>";
echo "天數:" . $days;
echo "<br>";
echo "第1天:" . $firstDate;
echo "<br>";
echo "最後一天:" . $finalDate;
echo "<br>";
echo "第1天星期:" . $firstDateWeek;
echo "<br>";

echo "<table>";
echo "<tr>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "<td>日</td>";
echo "</tr>";

$firstDayWeek = $firstDateWeek;
$weeks = ceil(($days + $firstDayWeek) / 7);

for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        if ($i == 0) {
            if ($j < $firstDayWeek) {
                echo "&nbsp;";
            } else {
                echo $j + 1 - $firstDayWeek;
            }
        } else {
            $day = $j + 1 + ($i - 1) * 7 - $firstDayWeek;
            if ($day > $days) {
                echo "&nbsp;";
            } else {
                echo $day;
            }
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>