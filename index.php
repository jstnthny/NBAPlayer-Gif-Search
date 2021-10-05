<?php


if(isset($_POST['searchPlayer'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];


}



require_once 'php/nba.php';
require_once 'php/giphy.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>NBA Player Gif Search</title>
</head>
<body>
<div class="app-container">
<!--    <div class="flex-container">-->
    <img class="header-gif" src="https://media0.giphy.com/media/3rgXBxficY9EFdNb0I/200.webp?cid=ecf05e47t6uybkmhome7xk792meupgs5vupxgpwgi6jyq7g4&rid=200.webp&ct=g">
        <h2>Nba player Gif Search</h2>

    <div class="rules">
        <h3>How does it Work?</h3>
        <img src="./images/ezgif.com-gif-maker.gif">
        <ol type="1">
            <li>Search for a NBA player (past or present player Ex: Lebron James, Kyle Lowry, Michael Jordan)</li>
            <li>Copy a link of the gif</li>
            <li>Send it your friends!</li>
        </ol>
    </div>


<!--    </div>-->

    <form class="player-search" method="post" action="#">
        <label>First Name</label>
        <input type="search" name="firstname">
        <label>Last Name</label>
        <input type="search" name="lastname">
        <button class="btn" name="searchPlayer">
            Search
        </button>
    </form>
    <div id="link" class="container-fluid"><span></span></div>
    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter"  onclick="copyToClipboard('#link')">
        Copy Link
    </button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    Link Copied to Clipboard!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <h1><?php echo $playerFullName ?></h1>
    <p>Position: <?php echo $playerPosition ?></p>
    <p>Team: <?php echo $playerTeamName ?></p>
    <p>Height: <?php echo $playerheight?></p>
    <?php echo $gifImgs ?>


</div>



<script src="js_functions/functions.js"></script>
</body>

</html>


