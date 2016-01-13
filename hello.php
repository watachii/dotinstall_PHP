<?php

$msg = 'Hello '; # 変数
define("NUMBER", "1"); # 定数

echo "${msg}World!\n";
$x = NUMBER + 1;
printf("NUMBER = %d\n", NUMBER);

$str = $msg . "World!"; # . 文字列の連結
echo $str . "\n";

$bool = 1 != 1;
var_dump($bool);

var_dump($msg);
var_dump(__LINE__); # scriptの行番号
var_dump(__FILE__); # scriptのファイル名
var_dump(__DIR__);  # scriptのあるディレクトリパス

# 配列 key => value
# key には文字列も指定可能
# (), []のどちらでも良い
$alphabets = array(
    0 => "a",
    1 => "b",
    2 => "c"
);
// $alphabets = ["a", "b", "c"]; # 上記と同じ
var_dump($alphabets);

foreach ($alphabets as $key => $value) {
    printf("KEY = %d\nVALUE = %s\n", $key, $value);
}

# htmlタグの中で書く場合に見やすくなる利点がある
foreach ($alphabets as $value) :
    echo "$value\n";
endforeach;

?>

<!-- htmlタグ内でforeachを使った場合(リスト表示)
<ul>
<?php foreach ($alphabets as $value) : ?>
<li><?php echo "$value"; ?></li>
<?php endforeach; ?>
</ul>
-->