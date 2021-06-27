<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Каталог</title>
    <link rel="stylesheet" type="text/css" href="./css/catalog/style.css">
</head>
<?php
require './header.php';
?>

<body>
    <div class="container">
        <div class="row">
            <div class="catalog">
                <?php
                $catalogs = get_catalogs();
                foreach ($catalogs as $catalog) {
                    echo '<div class="catalog-item">';
                    echo '<a href="' . $catalog['link_catalog'] . '?id=' . $catalog['id_catalog'] . '" class="catalog-item-link">';
                    echo '<div class="catalog-item-name">' . $catalog['name_catalog'] . '</div>';
                    echo '<div class="catalog-item-img" style="background: url(' . $catalog['image_catalog'] . ') no-repeat center center/cover;"></div>';
                    echo '</a></div>';
                }
                ?>

            </div>
        </div>


    </div>

    <?php
    require './footer.php';
    ?>
</body>

</html>