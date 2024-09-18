<?php

session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");

define('template', __DIR__ . DS . 'template');

defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", " ");


defined("DB_PASS") ? null : define("DB_PASS", " ");

defined("DB_NAME") ? null : define("DB_NAME", "todo_db");

$connection = mysqli_connect('localhost', 'root', '', 'todo_db');

 require_once("function.php");
?>