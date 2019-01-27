<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "models/Page_Data.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL blog demo";
$pageData->addCss("css/libs/bootstrap.min.css");
$pageData->addCss("css/main.css");
$pageData->addJs("js/libs/jquery-3.3.1.min.js");
$pageData->addJs("js/libs/bootstrap.bundle.min.js");
$pageData->addJs("js/main.js");

//database setting

$dbInfo = "mysql:host=localhost;dbname=blogabs";
$dbUser = "root";
$dbPassword = "root";
$db = new PDO($dbInfo, $dbUser, $dbPassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pageData->content .= include_once "controllers/blog.php";;
$page = include_once "views/page.php";
echo $page;