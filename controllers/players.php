<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
require "core/Player.php";

// Gets players with a query to display on the page
$players = $app['database']->selectAll('player', 'Player');


require 'views/players.view.php';