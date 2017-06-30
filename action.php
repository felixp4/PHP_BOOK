<?php
$all = "Name: " . $_POST['name'] . "\r\n" . "Message: " . $_POST['message'] . "\r\n";
$filename = "bamb.txt";

if (!$handle = fopen($filename, 'a'))
{
    echo "Не могу открыть файл $filename";
    exit;
}

if (fwrite($handle, $all) === FALSE)
{
    echo "Не могу произвести запись в файл $filename";
    exit;
}

header('Location: /');