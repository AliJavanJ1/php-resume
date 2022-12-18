<?php

$pattern = "/[1-9][0-9]*.txt/i";
$files = scandir(".", SCANDIR_SORT_DESCENDING);
$next_file_num = 1;
foreach ($files as $file) {
    if(preg_match_all($pattern, $file) == 1) {
        $next_file_num = intval(substr($file, 0, -4)) + 1;
        break;
    }
}
$file_name = $next_file_num.".txt";

file_put_contents($file_name, file_get_contents("php://input"));

?>