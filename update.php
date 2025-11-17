<?php
session_start();
//Load the model functions
require "models/film-model.php";

//Basic form processing
//Look at the name values of the form controls in create.php to see where these values 
// e.g. $_POST['title'] comes from <input type="text" id="title" name="title">
$id = $_POST['id'];
$title = $_POST['title'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$certId = $_POST['certId'];

//Ask the model to update the film
update($id, $title, $year, $duration, $certId);
$_SESSION["feedback"] = "Successfully updated the details for '{$title}'";
//Redirect the user back to index.php
header('Location: index.php');

?>
