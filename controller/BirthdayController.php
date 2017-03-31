<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index.php", array(
		'birthday' => getAllBirthdays()
	));
}

function create()
{
	//formulier tonen
	render("birthday/create.php");
}

function createSave()
{

	if (isset($_POST['person']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
		createBirthday($_POST['person'], $_POST['day'], $_POST['month'], $_POST['year']);
	}

	header("Location:" . URL . "birthday/index.php");
}

function edit()
{
	//$student = getStudent();

	// getStudent(1);

	render("birthday/edit.php");	
}

function editSave()
{
	
} 
	
function delete($id)
{
	if (isset($id)) {
		deleteBirthday($id);
	}

	header("Location:" . URL . "Birthday/index.php");
}
?>