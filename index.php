<?php
//Load the model functions
require "models/film-model.php";
// Ask the model to get all the films
$films = all();
//Load the view 
require "views/index.view.php";
?>