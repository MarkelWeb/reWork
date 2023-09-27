<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $mysqli = new mysqli('127.0.0.1', 'root', '',  'studybase');
    $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title','$content','$author')");
    return json_encode("success");