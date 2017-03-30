<?php
function getBirthday($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllBirthdays() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function editBirthday() 
{
}
function deleteBirthday($id) 
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE person_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));
	$db = null;
}
function createBirthday($person, $day, $month, $year) 
{
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES (:person, :day, :month, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':day' => $day,
		':month' => $month,
		':year' => $year

		));
	$db = null;
}