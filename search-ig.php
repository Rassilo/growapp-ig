<?php
$keyword = $_GET["keyword"];

if ($keyword != null) {
    $content = file_get_contents("https://www.instagram.com/web/search/topsearch/?query=" . $keyword);
    echo $content;
    return  'done';
}

return  [];
