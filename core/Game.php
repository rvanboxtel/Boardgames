<?php
/**
 * Created by PhpStorm.
 * User: romek
 * Date: 16-10-2018
 * Time: 11:18
 */
Class Game
{
    public $title;
    public $released;

    public function __construct($title, $released)
    {
        $this->title = $title;
        $this->released = $released;
    }
}

$games = [
    new Game('Paniek in de Wei', true),
    new Game('Kingdomino', true),
    new Game('Carcasonne', true),
    new Game('Clans of Caledonia', false)
];

