<?php

use Class\Manager\Manager;

include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "autoload.php";
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "db.php";

$manager = new Manager($db);
$manager->verifyLoginStatus();
$currentFile = basename($_SERVER['PHP_SELF']);

if (isset($_GET['id'])) {
    $result = $manager->deleteCertificateByTourOperatorId($_GET['id']);
    if ($result) {
        header("Location:../admin.php?name={$currentFile}&info=delteCertificateSuccess");
        die();
    } else {
        header("Location:../admin.php?redirectedFrom={$currentFile}&info=delteCertificateFailed");
        die();
    }
} else {
    header("Location:../admin.php?redirectedFrom={$currentFile}&info=idIsNotSet");
    die();
}