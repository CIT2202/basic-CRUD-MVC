<?php 
$pageTitle="The Amazing Film App";
require "views/partials/header.view.php";
if(isset($_SESSION['feedback'])){
    echo "<p>{$_SESSION['feedback']}</p>";
    unset($_SESSION['feedback']);
}
?>

<h1>Here's a list of films</h1>
<?php
// The results from the database are returned as an array
// Use a foreach loop to iterate over the array and display the each film
foreach ($films as $film) {
    echo "<p>";
    // Construct a link to the show.php page e.g. <a href="show.php?id=2">Winter's Bone</a>
    echo "<a href='show.php?id={$film["id"]}'>";
    // Display the film's title
    echo $film["title"];
    echo "</a>";
    echo "</p>";
}
?>
<?php 
require "views/partials/footer.view.php";
?>