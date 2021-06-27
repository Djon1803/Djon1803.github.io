<?php

function get_nameSite()
{
    global $link;
    $sql = 'SELECT * FROM `options_site` WHERE `name`="name_site";';
    $result = mysqli_query($link, $sql);
    $name = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $name;
}

function get_phoneNumber()
{
    global $link;
    $sql = 'SELECT * FROM `options_site` WHERE `name`="phone_number";';
    $result = mysqli_query($link, $sql);
    $number = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $number;
}

function get_timeJob()
{
    global $link;
    $sql = 'SELECT * FROM `options_site` WHERE `name`="time_job";';
    $result = mysqli_query($link, $sql);
    $time = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $time;
}

function get_catalogs()
{
    global $link;
    $sql = 'SELECT * FROM catalog'; //запрос на выборку
    $result = mysqli_query($link, $sql);
    $catalogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $catalogs;
}

function get_menu()
{
    global $link;
    $sql = 'SELECT * FROM menu'; //запрос на выборку
    $result = mysqli_query($link, $sql);
    $menus = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $menus;
}


function get_nameCatalog($getID)
{
    global $link;
    if (ctype_digit($getID)) {
        $sql = 'SELECT * FROM `catalog` WHERE `id_catalog`=' . $getID . ';'; //запрос на выборку
        $result = mysqli_query($link, $sql);
        $name = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $name;
    };
}

function get_types($getID)
{
    global $link;
    if (ctype_digit($getID)) {
        $sql = 'SELECT * FROM `type` WHERE `*id_catalog`=' . $getID . ';'; //запрос на выборку
        $result = mysqli_query($link, $sql);
        $types = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $types;
    };
}

function get_types_title($getID)
{
    global $link;
    if (ctype_digit($getID)) {
    $sql = 'SELECT * FROM `type` WHERE `id_type`=' . $getID . ';'; //запрос на выборку
    $result = mysqli_query($link, $sql);
    $types = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $types;
};
}


function get_products($getID)
{
    global $link;
    if (ctype_digit($getID)) {
        $sql = 'SELECT * FROM `seedling` WHERE `*id_type`=' . $getID . ';'; //запрос на выборку
        $result = mysqli_query($link, $sql);
        $types = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $types;
    };
}


function get_seedlings($getID)
{
    global $link;
    if (ctype_digit($getID)) {
        $sql = 'SELECT * FROM `seedling` WHERE `id_seedling`=' . $_GET['id'] . ';';
        $result = mysqli_query($link, $sql);
        $seedling = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $seedling;
    };
}


function get_images($getID)
{
    global $link;
    if (ctype_digit($getID)) {
        $sql = 'SELECT * FROM `images` WHERE `*id_seedling`=' . $getID . ';';
        $result = mysqli_query($link, $sql);
        $image = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $image;
    };
}

function get_priceSize($getID)
{
    global $link;
    if (ctype_digit($getID)) {
        $sql = 'SELECT * FROM `price-size` WHERE `*id_seedling`=' . $getID . ';';
        $result = mysqli_query($link, $sql);
        $prises = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $prises;
    };
}


function get_address()
{
    global $link;
    $sql = 'SELECT * FROM `options_site` WHERE `name`="address";';
    $result = mysqli_query($link, $sql);
    $address = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $address;
}


function get_email()
{
    global $link;
    $sql = 'SELECT * FROM `options_site` WHERE `name`="e-mail";';
    $result = mysqli_query($link, $sql);
    $email = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $email;
}

function get_image()
{
    global $link;
    $sql = 'SELECT * FROM `options_site` WHERE `name`="image_site";';
    $result = mysqli_query($link, $sql);
    $image = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $image;
}
