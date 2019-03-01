<?php
$myfile = fopen("sentence.txt", "r") or die("Unable to open file!");
$all_sentence = fread($myfile, filesize("sentence.txt"));
$all_sentence = iconv('GB2312', 'UTF-8', $all_sentence);
fclose($myfile);
//echo $all_sentence;
$list = explode("|", $all_sentence);
$count = count($list) - 1;
echo $list[rand(0, $count)];