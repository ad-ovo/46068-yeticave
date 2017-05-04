<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($page_title) ? $page_title . ' &mdash; YetiCave' : 'YetiCave'; ?></title>
    <link href="../../css/normalize.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>

<header class="main-header">
    <div class="main-header__container container">
        <h1 class="visually-hidden">YetiCave</h1>

        <a class="main-header__logo" href="../../index.php">
            <img src="../../img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
        </a>

        <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru">
            <input type="search" name="search" placeholder="Поиск лота">
            <input class="main-header__search-btn" type="submit" name="find" value="Найти">
        </form>

        <a class="main-header__add-lot button" href="../../add.php">Добавить лот</a>

        <nav class="user-menu">
            <ul class="user-menu__list">
                <li class="user-menu__item">
                    <a href="">Регистрация</a>
                </li>

                <li class="user-menu__item">
                    <a href="#">Вход</a>
                </li>
            </ul>
        </nav>
    </div> <!-- end container -->
</header>
