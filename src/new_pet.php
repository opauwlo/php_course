<?php require('./layouts/header.php') ?>
<?php
require('./lib/functions.php');
$pets = get_pets();
$pupCount = count($pets);
// check if methode is post

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        
    } else {
        $name = '';
    }
    
    if (isset($_POST['breed'])) {
        $breed = $_POST['breed'];
        
    } else {
        $breed = '';
    }
    if (isset($_POST['weight'])) {
        $weight = $_POST['weight'];
        
    } else {
        $weight = '';
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
        
    } else {
        $age = '';
    }
    if (isset($_POST['bio'])) {
        $bio = $_POST['bio'];
        
    } else {
        $bio = '';
    }
    if (isset($_POST['image'])) {
        $image = $_POST['image'];
        
    } else {
        $bio = '';
    }
    $newPet = [
        'name' => $name,
        'breed' => $breed,
        'weight' => $weight,
        'age' => $age,
        'bio' => $bio,
        'image' => $image,

    ];
    $pets[] = $newPet;
    $json = json_encode($pets);
    file_put_contents('./resources/pets.json', $json);
    header('Location: index.php');}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1> Add your pet! </h1>
            <form action="new_pet.php" method="POST">
                <div class="form-group">
                    <label for="pet-name" class="control-label"> Pet name</label> 
                    <input type="text" class="form-control" id="pet-name" name="name">
                </div>
                <div class="form-group">
                    <label for="pet-breed" class="control-label"> Pet breed</label> 
                    <input type="text" class="form-control" id="pet-breed" name="breed">
                </div>
                <div class="form-group">
                    <label for="pet-weight" class="control-label"> Pet weight libs</label> 
                    <input type="number" class="form-control" id="pet-weight" name="weight">
                </div>
                <div class="form-group">
                    <label for="pet-age" class="control-label"> Pet age</label> 
                    <input type="text" class="form-control" id="pet-age" name="age">
                </div>
                <div class="form-group">
                    <label for="pet-image" class="control-label"> Pet Image URL</label> 
                    <input type="text" class="form-control" id="pet-image" name="image">
                </div>
                <div class="form-group">
                    <label for="pet-bio" class="control-label"> Pet bio</label> 
                    <textarea type="text" class="form-control" id="pet-bio" name="bio"> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-heart"> Add</span>    
                </button>
            </form>
        </div>
    </div>
    <?php require('./layouts/footer.php') ?>
</div>