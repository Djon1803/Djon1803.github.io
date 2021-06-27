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
        $nameCatalog = get_nameCatalog($getID);
        echo $nameCatalog[0]['name_catalog'];
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
                    <a class="subc-cat-title" href="./catalog.php">Каталог</a>

                    <div class="subc-ul">
                        <?php
                        $catalogs = get_catalogs();
                        foreach ($catalogs as $catalog) {
                            echo '<a class="subc-li ActivCatalog" href="./' . $catalog['link_catalog'] . '?id=' . $catalog['id_catalog'] . '">' . $catalog['name_catalog'];
                            echo '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="subcatalog-right">
                <h1 class="subcatalog-title">
                    <?php
                    $nameCatalog = get_nameCatalog($getID);
                    echo $nameCatalog[0]['name_catalog'];
                    ?>
                </h1>
                <p class="subcatalog-text">
                    <?php
                    $catalogs = get_catalogs();
                    echo $catalogs[$getID - 1]['description']
                    ?>
                </p>
                <div class="row">
                    <div class="subcatalog-items">
                        <?php
                        $types = get_types($getID);
                        foreach ($types as $type) {
                            echo '<div class="subcatalog-item">';
                            echo '<a href="' . $type['link_type'] . '?id=' . $type['id_type'] . '" class="subcatalog-item-link">';
                            echo '<div class="subcatalog-item-img" style="background: url(' . $type['image_type'] . ') no-repeat center center/cover;"></div>';
                            echo '<div class="subcatalog-item-name">' . $type['name_type'] . '</div>';
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