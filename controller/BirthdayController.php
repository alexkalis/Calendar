<?php
require (ROOT .  "model/Birthdaymodel.php");
function index()
{
	$birthdays = getAllBirthdays();
	render("birthday/index", array(
		"birthdays" => $birthday ));
}
function create()
{
	render("birthday/create");
}
function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
}
function edit($id)
{
	render("birthday/edit", array(
		'birthday' => getBirthday($id)
	));
}
function editSave()
{
	if (!editBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
} 
function delete($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
}