<?php

$uploadfile = './upload/'. basename($_FILES['uploadfile']['name']);

if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
    echo "<h3>Файл успешно загружен на сервер</h3>";
}
else {
    echo "<h3>Ошибка! Файл не удалось загрузить  на сервер</h3>";
    exit;
}
