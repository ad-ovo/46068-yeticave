
    <section class="lot-item container">
        <h2><?=$lot_item['name'];?></h2>

        <div class="lot-item__content">
            <div class="lot-item__left">
                <div class="lot-item__image">
                    <img src="<?=$lot_item['imgUrl'];?>" width="730" height="548" alt="<?=$lot_item['name'];?>">
                </div>

                <p class="lot-item__category">Категория: <span><?=$lot_item['category'];?></span></p>
                <p class="lot-item__description">Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив
                    снег
                    мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот
                    снаряд
                    отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом
                    кэмбер
                    позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется,
                    просто
                    посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла
                    равнодушным.
                </p>
            </div> <!-- end lot-item__left -->

            <div class="lot-item__right">
                <div class="lot-item__state">
                    <div class="lot-item__timer timer">
                        10:54:12
                    </div>

                    <div class="lot-item__cost-state">
                        <div class="lot-item__rate">
                            <span class="lot-item__amount">Текущая цена</span>
                            <span class="lot-item__cost"><?=$lot_item['price'];?></span>
                        </div>

                        <div class="lot-item__min-cost">
                            Мин. ставка <span>12 000 р</span>
                        </div>
                    </div>

                    <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post">
                        <p class="lot-item__form-item">
                            <label for="cost">Ваша ставка</label>
                            <input id="cost" type="number" name="cost" placeholder="12 000">
                        </p>

                        <button type="submit" class="button">Сделать ставку</button>
                    </form>
                </div> <!-- end lot-item__state -->

                <div class="history">
                    <h3>История ставок (<span>4</span>)</h3>

                    <?php foreach( $bids as $bid ) :?>
                        <table class="history__list">
                            <tr class="history__item">
                                <td class="history__name"><?=$bid['name'];?></td>
                                <td class="history__price"><?=$bid['price'];?> р</td>
                                <td class="history__time"><?=getTime($bid['ts']); ?></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                </div> <!-- end history -->
            </div> <!-- end lot-item__right -->
        </div> <!--  end lot-item__content -->
    </section>

