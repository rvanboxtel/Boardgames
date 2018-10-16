<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */


//Inserting the data into the database
$app['database']->insert('users', ['fname' => $_POST['fname'], 'lname' => $_POST['lname'], 'email' => $_POST['email']]);
// Redirect back to home
header('Location: /');