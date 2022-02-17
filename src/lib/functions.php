<?php
    function get_pets() {
        //get json pets
        $pets = json_decode(file_get_contents("./resources/pets.json"), true);
        $pets = array_reverse($pets);
        return $pets;
    }

