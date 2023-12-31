<?php

use Class\Manager\Manager;

include_once __DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "autoload.php";
include_once __DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "db.php";

$manager = new Manager($db);
$manager->verifyLoginStatus();
$reviewList = $manager->readReviewAll();
$authorList = $manager->readAuthorAll();
$tourOperatorList = $manager->readTourOperatorAll();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/admin.css">
    <title>COperator BO</title>
</head>



<body>
    <!-- Modal -->
    <div class="modal fade" id="addReviewForm" tabindex="-1" aria-labelledby="addReviewFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header" id="modal-header">
                    <h1 class="modal-title fs-5" id="addReviewFormLabel">New Review</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="process/add_review.php" method="post">
                            <div class="mb-3">
                                <label for="authorSelect" class="form-label">Author</label>
                                <select type="text" class="form-control bg-dark " name="authorId" id="authorSelect" required>
                                    <option selected style="color: grey;">Select author...</option>
                                    <?php
                                    foreach ($authorList as $oneAuthor) {
                                        echo "<option value='{$oneAuthor->getAuthorId()}'>{$oneAuthor->getAuthorName()}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tourOperatorSelect" class="form-label">Tour Operator</label>
                                <select type="text" class="form-control bg-dark " name="tourOperatorId" id="tourOperatorSelect" required>
                                    <option selected style="color: grey;">Select tour operator...</option>
                                    <?php
                                    foreach ($tourOperatorList as $tourOperatorOne) {
                                        echo "<option value='{$tourOperatorOne->getTourOperatorId()}'>{$tourOperatorOne->getName()}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="scoreInput" class="form-label">Score</label>
                                <input type="number" class="form-control bg-dark " name="score" id="scoreInput" min="1" max="5" required>
                            </div>
                            <div class="mb-3">
                                <label for="messageInput" class="form-label">Message</label>
                                <input type="text" class="form-control bg-dark " name="message" id="messageInput" placeholder="Message" required>
                            </div>
                    </div>
                </div>
                <div class="modal-footer" id="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark" id="sidebar" style="max-width: 15%;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none text-reset">
                        <span class="fs-5 d-none d-sm-inline">COperator BO</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link align-middle px-0 text-decoration-none text-reset">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline "><i class="fa-solid fa-house"></i> Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="manage_destinations.php" class="nav-link align-middle px-0 text-decoration-none text-reset">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline "><i class="fa-solid fa-map-location"></i> Destinations</span>
                            </a>
                        <li class="nav-item">
                            <a href="manage_offers.php" class="nav-link align-middle px-0 text-decoration-none text-reset">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline "><i class="fa-solid fa-coins"></i> Offers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="manage_reviews.php" class="nav-link align-middle px-0 text-decoration-none text-reset">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline "><i class="fa-solid fa-star-half-stroke"></i> Reviews</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="manage_authors.php" class="nav-link align-middle px-0 text-decoration-none text-reset">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline "><i class="fa-solid fa-pen-nib"></i> Authors</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="manage_users.php" class="nav-link align-middle px-0 text-decoration-none text-reset">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline "><i class="fa-solid fa-user"></i> Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid" style="max-width: 85%;">
                <div class="d-flex justify-content-between">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-success mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#addReviewForm"><i class="fa-solid fa-plus"></i> Add Review</button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger mb-3 mt-3" onclick="window.location.href='process/user_logout.php'"><i class="fa-solid fa-right-from-bracket"></i>Log out</button>
                </div>
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Author</th>
                            <th scope="col">Tour Operator</th>
                            <th scope="col">Score</th>
                            <th scope="col">Message</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($reviewList !== null) {
                            foreach ($reviewList as $review) {
                                $author = $manager->readAuthorById($review->getAuthorId());
                                $tourOperator = $manager->readTourOperatorById($review->getTourOperatorId());
                                echo <<<HTML
                                    <!-- Modal -->
                                    <div class="modal fade" id="updateReviewForm{$review->getReviewId()}" tabindex="-1" aria-labelledby="updateReviewForm{$review->getReviewId()}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header" id="modal-header">
                                                <h1 class="modal-title fs-5" id="updateReviewForm{$review->getReviewId()}abel">Edit Review</h1>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <form action="process/update_review.php" method="post">
                                                        <div class="mb-3">
                                                            <label for="authorSelect" class="form-label">Author</label>
                                                            <select type="text" class="form-control bg-dark " name="authorId" id="authorSelect">
                                                                <option selected style="color: grey;" value="{$author->getAuthorId()}">{$author->getAuthorName()}</option>
                                    HTML;

                                foreach ($authorList as $oneAuthor) {
                                    echo "<option value='{$oneAuthor->getAuthorId()}'>{$oneAuthor->getAuthorName()}</option>";
                                }
                                echo <<<HTML

                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tourOperatorSelect" class="form-label">Tour Operator</label>
                                                            <select type="text" class="form-control bg-dark " name="tourOperatorId" id="tourOperatorSelect">
                                                            <option selected style="color: grey;" value="{$tourOperator->getTourOperatorId()}">{$tourOperator->getName()}</option>
                                    HTML;

                                foreach ($tourOperatorList as $tourOperatorOne) {
                                    echo "<option value='{$tourOperatorOne->getTourOperatorId()}'>{$tourOperatorOne->getName()}</option>";
                                }
                                echo <<<HTML

                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="scoreInput" class="form-label">Score</label>
                                                            <input type="number" class="form-control bg-dark " name="score" id="scoreInput" min="1" max="5" value="{$review->getScore()}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="messageInput" class="form-label">Message</label>
                                                            <input type="text" class="form-control bg-dark " name="message" id="messageInput" placeholder="Message" value="{$review->getMessage()}">
                                                        </div>
                                                        <input type="hidden" name="reviewId" value="{$review->getReviewId()}">
                                                </div>
                                            </div>
                                            <div class="modal-footer" id="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-outline-success">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Modal -->
                                  </tr>
                                  <td>{$review->getReviewId()}</td>
                                  <td>{$author->getAuthorName()}</td>
                                  <td>{$tourOperator->getName()}</td>
                                  <td>{$review->getScore()}</td>
                                  <td>{$review->getMessage()}</td>
                                  <td><a href="#updateReviewForm{$review->getReviewId()}" data-bs-toggle="modal" data-bs-target="#updateReviewForm{$review->getReviewId()}" style="margin-right: 0.75rem;"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></a> <a href="/process/delete_review.php?id={$review->getReviewId()}"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a></td>
                                </tr>
                                HTML;
                            }
                        } else {
                            echo <<<HTML
                            <p>Review not found</p>
                            HTML;
                        }
                        ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="assets/js/admin.js"></script>
</body>


</html>