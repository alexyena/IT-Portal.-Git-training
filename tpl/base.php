<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title><?=$title?></title>

    <!-- CSS-ядро Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Підібрані стилі саме для цього шаблона -->
    <link href="css/base.css" rel="stylesheet">
    <link href="<?=$style?>" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?id=main">IT Portal</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?id=main">Главная</a></li>
            <li><a href="index.php?id=about">Про сайт</a></li>
            <li><a href="index.php?id=contact">Контакти</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Стартовий Шаблон для Bootstrap</h1>
        <p class="lead">Використовуйте цей документ як варіант швидкого старту в будь-якому новому проекті.<br> Ви отримаєте лише цей текст та базовий HTML-документ.</p>
      </div>

    </div><!-- /.container -->


    <!-- JavaScript-ядро Bootstrap
    ================================================== -->
    <!-- Розміщуйте підключення JavaScript в кінці документа щоб сторінки завантажувались швидше -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
