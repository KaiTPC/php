<?php

$d = [12, 9, 20, 30, 15, 77, 19];
sort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

sort($d);
$result = sort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

rsort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

$fill = array_fill(0, 55, 'hi');
echo "<pre>";
print_r($fill);
echo "</pre>";

echo array_search("10", $d);
echo $d[4];

$a = [1 => "A", "001" => "B", "name" => "Tony", "parent_name" => "Jocy"];
echo $a[1];
echo $a['001'];
echo $a['name'];
echo $a['parent_name'];

$b = ["B", "C", "D", "E", "F"];
echo "<pre>";
print_r($b);
echo "</pre>";

$c = ["A", "B", 'C'];
$c['total'] = 4;
$c[] = "E";
$c['total'] = 5;
echo "<pre>";
print_r($c);
echo "</pre>";

$dd = "AAA";
$check = is_array($dd);
if ($check) {
    echo "是陣列";
} else {
    echo "不是陣列";
}

if (in_array("D", $c)) {
    echo "D 在陣列中";
} else {
    echo "D 不在陣列中";
}

$d = ["A", 9, "C", 21, 77, 3];
echo "<pre>";
print_r($d);
echo "</pre>";

sort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

rsort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

$keys = array_keys($d);
echo "<pre>";
print_r($keys);
echo "</pre>";

$merge = array_merge($a, $b);
echo "<pre>";
print_r($merge);
echo "</pre>";

$seA = serialize($a);
echo $seA;
$ueA = unserialize($seA);
echo "<pre>";
print_r($ueA);
echo "</pre>";

$s = implode(',', $a);
echo $s;
$array = explode(',', $s);
echo "<pre>";
print_r($array);
echo "</pre>";

?>
