<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>

        <ul class="promo__list">
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
            </li>

            <li class="promo__item promo__item--attachment">
                <a class="promo__link" href="all-lots.html">Крепления</a>
            </li>

            <li class="promo__item promo__item--boots">
                <a class="promo__link" href="all-lots.html">Ботинки</a>
            </li>

            <li class="promo__item promo__item--clothing">
                <a class="promo__link" href="all-lots.html">Одежда</a>
            </li>

            <li class="promo__item promo__item--tools">
                <a class="promo__link" href="all-lots.html">Инструменты</a>
            </li>

            <li class="promo__item promo__item--other">
                <a class="promo__link" href="all-lots.html">Разное</a>
            </li>
        </ul>
    </section> <!-- end promo -->

    <section class="lots">
        <header class="lots__header">
            <h2>Открытые лоты</h2>

            <select class="lots__select" title="Все категории">
                <option>Все категории</option>

                <?php foreach($lot_categories as $lot_category):  ?>
                    <option><?=$lot_category;?></option>
                <?php endforeach; ?>
            </select>
        </header>

        <ul class="lots__list">
            <?php foreach($lot_items as $lot_item): ?>

                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=$lot_item['imgUrl'];?>" width="350" height="260" alt="<?=$lot_item['name'];?>">
                    </div>

                    <div class="lot__info">
                        <span class="lot__category"><?=$lot_item['category']?></span>

                        <h3 class="lot__title">
                            <a class="text-link" href="/lot?id=<?=$lot_item['id'] . '/' .  preg_replace('/\s+/', '-', $lot_item['name']);?>">
                                <?=$lot_item['name'];?>
                            </a>
                        </h3>

                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?=$lot_item['price'];?><b class="rub">р</b></span>
                            </div>

                            <div class="lot__timer timer">
                                <?=$lot_time_remaining;?>
                            </div>
                        </div> <!-- end lot-state -->
                    </div>
                </li>

            <?php endforeach; ?>
        </ul>
    </section> <!-- end lots -->
</main>
