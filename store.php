<?php
//Load the model functions
require "models/film-model.php";

//Basic form processing
//Look at the name values of the form controls in create.view.php to see where these values 
// e.g. $_POST['title'] comes from <input type="text" id="title" name="title">
$title = $_POST['title'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$certId = $_POST['certId'];

//Ask the model to insert the film
store($title, $year, $duration, $certId);
//Redirect to the home page
header('Location: index.php');
