<?php
$myfile = fopen("sentence.txt", "r") or die("Unable to open file!");
$all_sentence = fread($myfile, filesize("sentence.txt"));
$all_sentence = iconv('GB2312', 'UTF-8', $all_sentence);
fclose($myfile);
$list = explode("|", $all_sentence);
$count = count($list) - 1;
do{
    $sentence = $list[rand(0, $count)];
    $sentence = str_replace("<br/>","\n",$sentence);
    $len = mb_strlen($sentence,'UTF8');
} while($_GET['mobile'] == "1" && $len>=200);
echo $sentence;