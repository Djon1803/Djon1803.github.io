
<?php
    require_once './include/database.php';
    require_once './include/functions.php';
    
    if (isset($_GET['id'])) {
        $getID = $_GET['id'];
    } else $getID = '1';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="./favicon.ico">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<header>
    <div class="container">
        <div class="header">

            <a class="header-logo" href="./">
                <div class="header-left">
                    <img class="logo-header" src="<?php $image = get_image(); echo $image[0]['text_1']; ?>">
                </div>
                <div class="header-right">
                    <?php
                    $namesite = get_nameSite();
                    echo '<p class="first-name">' . $namesite[0]['text_1'] . '</p>';
                    echo '<p class="second-name">' . $namesite[0]['text_2'] . '</p>';
                    ?>
                </div>
            </a>

            <!-- <div class="search">
                <form></form>
            </div> -->

            <div class="header-phone">
                <?php
                $phoneNumber = get_phoneNumber();
                echo '<a class="phone" href="tel:' . $phoneNumber[0]['text_2'] . '">' . $phoneNumber[0]['text_1'] . '</a>';

                $timejob = get_timeJob();
                echo '<div class="raspis">' . $timejob[0]['text_1'] . '</div>';
                ?>
            </div>

                <!-- <div class="header-btn">
                    <button class="header-btn-smeta">Рассчитать смету</button>
                    <div style="display: none;">like</div>
                    <div style="display: none;"> карзина</div>
                </div> -->

        </div>

        <div class="header-menu">
            <ul id="mainmenu" class="main-menu">
                <div class="menu_left">
                    <li class="menu-katalog">
                        <div class="poloski">
                            <div class="poloska"></div>
                            <div class="poloska"></div>
                            <div class="poloska"></div>
                        </div>
                        <div class="catalog-menu">
                            <a href="./catalog.php" class="catalog-name">КАТАЛОГ</a>
                        </div>

                        <ul class="katalog-items">
                            <?php
                            $catalogs = get_catalogs();
                            foreach ($catalogs as $catalog) {
                                echo '<li class="katalog-item">';
                                echo '<a class="katalog-item-a" href="' . $catalog['link_catalog'] . '?id=' . $catalog['id_catalog'] . '">' . $catalog['name_catalog'] . '</a>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                        </li>
                </div>
                <div class="menu_right">
                    <?php
                    $menus = get_menu();
                    foreach ($menus as $menu) {
                        echo '<li class="name-menu"> <div class="menu-item">';
                        echo '<a class="a-menu" href="' . $menu['link_menu'] . '">' . $menu['name_menu'] . '</a>'; // выводим данные);
                        echo '</div> </li>';
                    }
                    ?>
                </div>
            </ul>
        </div>
    </div>
</header>