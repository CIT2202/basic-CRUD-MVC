<?php
//Load the model functions
require "models/film-model.php";
//Get the id from the query string e.g. edit.php?id=3
$id=(int)$_GET['id'];
// Ask the model to find the film
$film = find($id);
//Load the view to display the edit form
require "views/edit.view.php";
?>

