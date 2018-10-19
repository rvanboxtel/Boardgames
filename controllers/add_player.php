<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//Inserting the data into the database
$app['database']->insert('users', ['fname' => $_POST['fname'], 'lname' => $_POST['lname'], 'email' => $_POST['email'], 'mobile' => $_POST['mobile'],'password' => $hashed_password]);
$app['database']->insert('player', ['nickname' => $_POST['nickname']]);
// Redirect back to home
header('Location: /');