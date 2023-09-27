<?php
		class Blog{
			//Добавления статьи
			public static function addArticle(){
				global $mysqli;
				$title = $_POST['title'];
				$content = $_POST['content'];
				$author = $_POST['author'];
				$mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title','$content','$author')");
				header('Location: /');
			}
			//Удаление статьи
			public static function deleteArticle(){
			}
			//Редактироование статьи
			public static function editArticle(){
			}
			//Отдать все статьи в JSON
			public static function getArticles(){
			}
							//Отдать статью по айди
			public static function getArticle($id){
			}
		}
