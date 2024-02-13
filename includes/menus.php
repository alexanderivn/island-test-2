<?php
$menuItems = file_get_contents('assets/json/menuItems.json');
$data = json_decode($menuItems, true);
?>

<section id="menu" class="menu">
    <section class="menu__container" data-aos="fade-up"
             data-aos-anchor-placement="bottom-bottom">
        <h1 class="menu__title">What would you like to have?</h1>
        <p class="menu__description">Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream in
            half and half. Spoon
            lungo
            variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder.</p>

        <section class="menu__item">
            <?php if (empty($data)): ?>
                <h1>Failed to load data</h1>
            <?php else: ?>
                <?php foreach ($data['items'] as $item): ?>
                    <section class="menu__item__container">
                        <img class="menu__item__img" src="<?= $item['image'] ?>" alt="">
                        <span class="menu__item__title"><?= $item['name'] ?></span>
                    </section>
                <?php endforeach ?>
            <?php endif ?>
        </section>
    </section>


    <section class="menu__cta__container" data-aos="fade-up"
             data-aos-anchor-placement="bottom-bottom">
        <h1 class="menu__cta__title">Extraction instant that variety
            white robusta strong</h1>
        <p class="menu__cta__description">Coffee plunger pot sweet barista, grounds acerbic coffee instant crema
            cream in half and half. Spoon
            lungo
            variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder. Mazagran café au lait wings
            spoon,
            percolator milk latte dark strong. Whipped, filter latte, filter aromatic grounds doppio caramelization
            half
            and half.</p>

        <a href="#">
            <button class="menu__cta__button">CONTACT US</button>
        </a>
    </section>
</section>