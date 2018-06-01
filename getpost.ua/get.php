<!DOCTYPE html>
<html>
<head>
    <title>lessons</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    if(!isset($_GET["id"])){//isset - проверка элемента массива. !isset - если не найден элемент.
        exit("Нет id - ошибка!"); //exit - завершает скрипт и выводит сообщение
    }
    $id = $_GET["id"];//создаем переменную которая будет хранить значение массива с ключем id
    $text = file_get_contents("data/$id");// загоняем в переменную весь контент с данного файла
?>
    Шапка
    <hr>
        <?php
            $files = scandir("data");
            //print_r($files);//проверяем/просматриваем массив
            foreach ($files as $value) {//перебираем массив и проверяем названия файлов
                if(is_file("data/".$value)){//если название файла существует
                    echo "<a href=\"?id=$value\">Новость $value</a>";
//то создаем ссылку с названием файла
                }//если на нее нажать то url меняется и перезаписывается 
//переменная $_GET что приводит к изменения текста на экране.
            }
        ?>
    <hr>
    <?php
        echo nl2br($text); //nl2br переделывает переносы в <br>
    ?>
    <hr>
    Подвал
</body>
</html>
