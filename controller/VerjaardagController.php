<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	//formulier tonen
	render("birthday/create");
}

function createSave()
{

	if (isset($_POST['person']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
		createBirthday($_POST['person'], $_POST['day'], $_POST['month'], $_POST['year']);
	}

	header("Location:" . URL . "birthday/index");
}

function edit()
{
	//$student = getStudent();

	// getStudent(1);

	render("birthday/edit");	
}

function editSave()
{
	
} 

function delete($id)
{
	if (isset($id)) {
		deleteBirthday($id);
	}

	header("Location:" . URL . "Birthday/index");
}