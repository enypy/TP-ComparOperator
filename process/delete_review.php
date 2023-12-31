<?php

use Class\Manager\Manager;

include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "autoload.php";
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "db.php";

$manager = new Manager($db);
$manager->verifyLoginStatus();
$currentFile = basename($_SERVER['PHP_SELF']);

if (isset($_GET['id'])) {
    $result = $manager->deleteReviewById($_GET['id']);
    if ($result) {
        header("Location:../manage_reviews.php?id={$_GET['id']}&info=deleteReviewSuccess");
        die();
    } else {
        header("Location:../manage_reviews.php?id={$_GET['id']}&info=deleteReviewFailed");
        die();
    }
} else {
    header("Location:../manage_reviews.php?redirectedFrom={$currentFile}&info=authorIdIdIsNotSet");
    die();
}