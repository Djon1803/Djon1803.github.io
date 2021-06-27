<!DOCTYPE html>
<html>
<?php
require_once './include/database.php';
require_once './include/functions.php';
if (isset($_GET['id'])) {
    $getID = $_GET['id'];
} else $getID = '1';
?>

<head>
    <title>
        <?php
        $types = get_types_title($getID);
        echo $types[0]['name_type'];
        ?>
    </title>
    <link rel="stylesheet" type="text/css" href="./css/subCatalog/style.css">
</head>
<?php
require './header.php';
?>

<body>

    <div class="container">
        <div class="subcatalog">
            <div class="subcatalog-left">
                <div class="blok-catalog">
                    <?php
                    $types = get_types_title($getID);
                    $nameCatalog = get_nameCatalog($types[0]['*id_catalog']);
                    echo '<a class="subc-cat-title" href="./' . $nameCatalog[0]['link_catalog'] . '?id=' . $nameCatalog[0]['id_catalog'] . '">';
                    echo $nameCatalog[0]['name_catalog'];
                    echo '</a>';
                    ?>
                    <div class="subc-ul">
                        <?php
                        $types = get_types_title($getID);
                        $types = get_types($types[0]['*id_catalog']);
                        foreach ($types as $type) {
                            echo '<a class="subc-li ActivProducts" href="./' . $type['link_type'] . '?id=' . $type['id_type'] . '" id="' . $type['id_type'] . '">' . $type['name_type'] . '</a>';
                        };
                        ?>
                    </div>
                </div>
            </div>

            <div class="subcatalog-right">
                <h1 class="subcatalog-title">
                    <?php
                    $types = get_types_title($getID);
                    echo $types[0]['name_type'];
                    ?>
                </h1>
                <p class="subcatalog-text">
                    <?php
                    $catalogs = get_types($getID);
                    echo $catalogs[$getID - 1]['description']
                    ?>
                </p>
                <div class="row">
                    <div class="subcatalog-items">
                        <?php
                        $types = get_products($getID);
                        foreach ($types as $type) {
                            $images = get_images($type['id_seedling']);
                            echo '<div class="subcatalog-item">';
                            echo '<a href="seedling.php?id=' . $type['id_seedling'] . '" class="subcatalog-item-link">';
                            echo '<div class="subcatalog-item-img" style="background: url(' . $images[0]['image']  . ') no-repeat center center/cover;"></div>';
                            echo '<div class="subcatalog-item-name">' . $type['name_seedling'] . '</div>';
                            $prises = get_priceSize($type['id_seedling']);
                            echo '<div class="subcatalog-item-prise">' . $prises[0]['prise'] . ' ₽</div>';
                            echo ' </a></div>';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
    require './footer.php';
    ?>
</body>
<script src="./script/script.js"></script>

</html>