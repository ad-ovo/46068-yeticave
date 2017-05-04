<main>
    <nav class="nav">
        <ul class="nav__list container">
            <li class="nav__item">
                <a href="">Доски и лыжи</a>
            </li>

            <li class="nav__item">
                <a href="">Крепления</a>
            </li>

            <li class="nav__item">
                <a href="">Ботинки</a>
            </li>

            <li class="nav__item">
                <a href="">Одежда</a>
            </li>

            <li class="nav__item">
                <a href="">Инструменты</a>
            </li>

            <li class="nav__item">
                <a href="">Разное</a>
            </li>
        </ul>
    </nav>

    <form class="form form--add-lot container" action="../../add.php" method="post"> <!-- form--invalid -->
        <h2>Добавление лота</h2>

        <div class="form__container-two">
            <div class="form__item"> <!-- form__item--invalid -->
                <label for="lot-name">Наименование</label>
                <input id="lot-name" type="text" name="name" placeholder="Введите наименование лота" >
                <span class="form__error"></span>
            </div>

            <div class="form__item">
                <label for="category">Категория</label>

                <select id="category" name="category">
                    <option>Выберите категорию</option>
                    <option>Доски и лыжи</option>
                    <option>Крепления</option>
                    <option>Ботинки</option>
                    <option>Одежда</option>
                    <option>Инструменты</option>
                    <option>Разное</option>
                </select>

                <span class="form__error"></span>
            </div>
        </div> <!-- end form__container-two -->

        <div class="form__item form__item--wide">
            <label for="message">Описание</label>
            <textarea id="message" name="description" placeholder="Напишите описание лота"></textarea>
            <span class="form__error"></span>
        </div>

        <div class="form__item form__item--file"> <!-- form__item--uploaded -->
            <label>Изображение</label>

            <div class="preview">
                <button class="preview__remove" type="button">x</button>
                <div class="preview__img">
                    <img src="../../img/avatar.jpg" width="113" height="113" alt="Изображение лота">
                </div>
            </div>

            <div class="form__input-file">
                <input class="visually-hidden" type="file" name="img" id="photo2" value="">
                <label for="photo2">
                    <span>+ Добавить</span>
                </label>
            </div>
        </div> <!-- end form__item -->

        <div class="form__container-three">
            <div class="form__item form__item--small">
                <label for="lot-rate">Начальная цена</label>
                <input id="lot-rate" type="number" name="rate" placeholder="0">
                <span class="form__error"></span>
            </div>

            <div class="form__item form__item--small">
                <label for="lot-step">Шаг ставки</label>
                <input id="lot-step" type="number" name="step" placeholder="0">
                <span class="form__error"></span>
            </div>

            <div class="form__item">
                <label for="lot-date">Дата заверщения</label>
                <input class="form__input-date" id="lot-date" type="text" name="due-date" placeholder="20.05.2017">
                <span class="form__error"></span>
            </div>
        </div> <!-- end container__container-three -->

        <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
        <button type="submit" name="lot-send" class="button">Добавить лот</button>
    </form>
</main>
