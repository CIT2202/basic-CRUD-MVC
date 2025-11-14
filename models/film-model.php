<?php
// Model
function getConnection()
{
	try{
       $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'root', '');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $exception)
	{
		echo "Oh no, there was a problem" . $exception->getMessage();
	}
	return $conn;
}

function closeConnection($conn)
{
	$conn=null;
}

function all()
{
	$conn = getConnection();
	$query = "SELECT id, title, year, duration FROM films";
	$resultset = $conn->query($query);
	$films = $resultset->fetchAll();
	closeConnection($conn);
	return $films;
}

function find($id)
{
	$conn = getConnection();
	$stmt = $conn->prepare("SELECT id, title, year, duration FROM films WHERE films.id = :id");
	$stmt->bindValue(':id',$id);
	$stmt->execute();
	$film=$stmt->fetch();
	closeConnection($conn);
	return $film;
}

function store($title, $year, $duration, $certId){
	$conn = getConnection();
	$query="INSERT INTO films (id, title, year, duration, certificate_id) VALUES (NULL, :title, :year, :duration, :certId)";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':title', $title);
	$stmt->bindValue(':year', $year);
	$stmt->bindValue(':duration', $duration);
	$stmt->bindValue(':certId', $certId);
	$stmt->execute();
	closeConnection($conn);
}

function update($id,$title,$year,$duration,$certId){
	$conn = getConnection();
	$query="UPDATE films SET title=:title, year=:year, duration=:duration, certificate_id=:certificate_id WHERE id=:id";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':id', $id);
	$stmt->bindValue(':title', $title);
	$stmt->bindValue(':year', $year);
	$stmt->bindValue(':duration', $duration);
	$stmt->bindValue(':certificate_id', $certId);
	$stmt->execute();
	closeConnection($conn);
}

function delete($id){
	$conn = getConnection();
	//SQL DELETE for deleting rows
    //First we need to delete the film's records from the junction table
    //Use a prepared statement to bind the id from the form
    $stmt = $conn->prepare("DELETE FROM film_genre WHERE film_genre.film_id = :id");
    $stmt->bindValue(':id',$id);
    $stmt->execute();

    //Now we can delete the film
    $stmt = $conn->prepare("DELETE FROM films WHERE films.id = :id");
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    //Close the connect
    $conn=NULL;
	closeConnection($conn);
}