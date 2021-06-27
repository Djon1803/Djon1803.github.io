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
        $seedling = get_seedlings($getID);
        foreach ($seedling as $item) {
            echo $item['name_seedling'];
        }
        ?>
    </title>
    <link rel="stylesheet" type="text/css" href="./css/seedling/style.css">
</head>
<?php
    require './header.php';
    ?>
<body>

    <div class="container">
        <div class="seedling">
            <div class="seedling-left">

                <?php
                $images = get_images($getID);
                echo '<img class="output-image" id="IdActivImg" src="' . $images[0]['image'] . '">';

                echo '<div class="input-image">';
                foreach ($images as $image) {
                    echo '<div class="btn-img" ><img class="img-in" id="activImg" src="' . $image['image'] . '" alt=""></div>';
                }
                echo '</div>';
                ?>
            </div>
            <div class="seedling-right">
                <h1 class="title-seedling">
                    <?php
                    $seedling = get_seedlings($getID);
                    foreach ($seedling as $item) {
                        $name_seedling = $item['name_seedling'];
                        $small_description = $item['small_description'];
                        $description = $item['description'];
                    }
                    echo $name_seedling;
                    ?>
                </h1>
                <div class="descr-seedling">
                    <?php
                    echo $small_description;
                    ?>
                </div>
                <?php
                $prises = get_priceSize($getID);
                foreach ($prises as $prise) {
                    echo '<div class="prise-size">';
                    echo '<div class="size">' . $prise['size'] . '</div>';
                    echo '<div class="dashed"></div><div class="price-oll">';
                    echo '<div class="price">' . $prise['prise'] . '</div>';
                    echo '<div class="price-rub">РУБ</div></div></div>';
                }
                ?>
            </div>
        </div>
        <div class="seedling-description">
            <div class="description-left">
                <div class="text-description">ОПИСАНИЕ</div>
                <div class="t-description">
                    <?php
                    echo $description;
                    ?>
                </div>

            </div>
            <div class="description-right">
                <div class="title-symbols">УСЛОВНЫЕ ОБОЗНАЧЕНИЯ</div>
                <div class="symbol">

                    <div class="symbol-item"><span>С</span>- объем контейнера (литры)</div>
                    <div class="symbol-item"><span>H</span>- высота растения (см)</div>
                    <div class="symbol-item"><span>D</span>- диаметр кроны</div>
                    <div class="symbol-item"><span>RB</span>- ком с мешковиной</div>
                    <div class="symbol-item"><span>Pa</span>- высота штамба</div>
                    <div class="symbol-item"><span>Stu</span>- обхват ствола</div>
                    <div class="symbol-item"><span>Sth</span>- высота штамба до начала кроны</div>
                    <div class="symbol-item"><span>MS</span>- многоствольное дерево</div>
                    <div class="symbol-item"><span>WRB</span>- растение с комом земли, упакованным в мешковину и металлическую сетку</div>

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