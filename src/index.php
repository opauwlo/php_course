<?php

    $cleverWelcome = ucwords("Welcome to the AirPupnMeow.com website!");
    $pets = json_decode(file_get_contents("./resources/pets.json"), true);
    $pets = array_reverse($pets);
    $pupCount = count($pets);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>AirPupnMeow.com: All the love, none of the crap!</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AirPupnMeow</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

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
                        echo '<img class="img-rounded" src="./images/' . $pet['filename'] . '" alt="' . $pet['name'] . '">';
                        echo '<h3>' . $pet['name'] . '</h3>';
                        echo '<blockquote>';
                        echo '<span class="label label-info' . $pet['breed'] . '">' . $pet['breed'] . '</span>';
                        echo '<p>' . $pet['age'] . ' years old</p>';
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

        <footer>
            <p>&copy; AirPupnMeow.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>