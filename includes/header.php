<?php
$navigationMenu = [
    [
        "title" => "About",
        "url" => "#about",
    ],
    [
        "title" => "Menu",
        "url" => "#menu",
    ],
    [
        "title" => "Moods",
        "url" => "#moods",
    ],
    [
        "title" => "Blog",
        "url" => "#blog",
    ],
    [
        "title" => "Contact",
        "url" => "#contact",
    ]
];
?>

<nav class="navbar">
    <img src="public/icons/logo.svg" alt="" class="navbar__logo"/>
    <ul class="navbar__items__container">
        <?php foreach ($navigationMenu as $navItem): ?>
            <li class="navbar__item"><a href="<?= $navItem["url"] ?>" rel="noreferrer">
                    <?= $navItem["title"] ?></a></li>
        <?php endforeach ?>
    </ul>
</nav>


