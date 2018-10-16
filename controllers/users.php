<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

require 'core/Users.php';

// Gets users with a query to display on the page
$users = $app['database']->selectAll('users', 'Users');

require 'views/users.view.php';