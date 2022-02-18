<?php 
require('./lib/functions.php');
$pets = get_pets();
$pupCount = count($pets);


?>
<?php require('./layouts/header.php') ?>
<h1> Helping you find your new best friend from over <?php echo $pupCount ?> pets. </h1>
<?php require('./layouts/footer.php') ?>
