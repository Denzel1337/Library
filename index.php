<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Библиотека</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <script src="js/openBooks.js"></script>
  <script src="js/openAuthors.js"></script>
  <script src="js/openGenres.js"></script>
</head>
<body>
<div class="header">Б И Б Л И О Т Е К А</div>
<div class="border_header"></div>
  <nav class="menu_buttons">
    <ul>
      <li onclick="openBooks()"><a href="#" class="book"><i></i>Книги</a></li>
      <li onclick="openAuthors()" class="authors"><a href="#"><i></i>Авторы</a></li>
      <li onclick="openGenres()" class="fa"><a href="#"><i></i>Жанры</a></li>
    </ul>
  </nav>
 <p class="menu_image"><img src="img/text.png"></p>
 <div class="border_content"></div>
</body>
</html>
