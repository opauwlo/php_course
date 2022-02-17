<?php

    $cleverWelcome = ucwords("Welcome to the AirPupnMeow.com website!");
    require('./lib/functions.php');
    $pets = get_pets();
    $pupCount = count($pets);
?>

<!DOCTYPE html>
<html lang="en">


<body>

    <?php require('./layouts/header.php') ?>
    <div class="jumbotron">
        <div class="container">

            <h1> <?php echo $cleverWelcome;?> </h1>

            <p> <?php echo $pupCount;?> pet friends </p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
                <?php
                    foreach($pets as $pet ) {
                        echo '<div class="col-md-4 pet-list-item">';
                        echo '<img class="img-rounded" src="' . $pet['image'] . '" alt="' . $pet['name'] . '">';
                        echo '<h3>' . $pet['name'] . '</h3>';
                        echo '<blockquote>';
                        echo '<span class="label label-info">' . $pet['breed'] . '</span>';
                        //verfiify if have age verify if age is not empty
                        if (!array_key_exists('age', $pet) || $pet['age'] == '' ) {
                            echo '<p> Unknown</p>';
                        } elseif ($pet['age'] == 'hidden') {
                            echo '<p> Contact the owner for this information</p>';
                        } else {
                            echo '<p>' . $pet['age'] . ' years old</p>';
                        }
                        echo '<p>' . $pet['weight'] . ' lbs</p>';
                        echo '</blockquote>';
                        echo '<h4>' . $pet['bio'] . '</h4>';
                        echo '</div>';
                 } ?>
            <?php
                foreach($pets as $pet ) {
                    echo '<div class="col-lg-4 m-2 mt-5">';
                    echo '<h2>' . $pet['name'] .'</h2>';
                    echo '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>';
                    echo '<p><a class="btn btn-default" href="#">View details &raquo;</a></p>';
                    echo '</div>';
                }
            
            ?>
        <hr>
        <?php require('./layouts/footer.php') ?>


    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>