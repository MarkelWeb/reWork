<?php
$mysqli = new mysqli('127.0.0.1', 'root', '',  'studybase');
$result = $mysqli->query("SELECT * FROM articles");
$articles = [];
while (($row = $result->fetch_assoc()) != null){
    $articles[] = $row;
}
echo json_encode($articles);