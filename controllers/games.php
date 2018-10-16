<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

require 'core/games.php';
/**
 * @var $games database query for games page
 */
$games = $app['database']->selectAll('games', 'games');


require 'views games.view.php';