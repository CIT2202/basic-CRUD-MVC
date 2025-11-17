<?php
session_start();
//Load the model functions
require "models/film-model.php";

//Get the id from the hidden field in the form
$id = $_POST['id'];
//Ask the model to find the film
$film = find($id);
//Ask the model to delete the film
delete($id);
$_SESSION["feedback"] = "Successfully deleted '{$film['title']}'";
//Redirect to the home page
header('Location: index.php');
?>
