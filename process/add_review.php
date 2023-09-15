<?php

use class\Manager;

include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "autoload.php";
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "db.php";


if (isset($_POST['authorName'])) {
    $review = (new Manager($db))->publishOrUpdateReview($_POST['authorName'], $_POST['tourOperatorId'],  $_POST['scoreValue'], $_POST['message']);
    $currentFile = __FILE__;
    if ($review) {
        header("Location:../location.php?name={$_POST['locationName']}&info=addReviewSuccess");
        die();
    } else {
        header('Location:../location.php?redirectedFrom={$currentFile}&info=addReviewFailed');
        die();
    }
} else {
    header('Location:../location.php?redirectedFrom={$currentFile}&info=authorNameIsNotSet');
    die();
    
}
