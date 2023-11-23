<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION)){
	session_start();
}

$phone = "+5491140586727";
$web_presentation = "Muy buenas Refrigeración Raymondi!";

/* Base */
$bd['host'] = 'localhost';
$bd['name'] = 'onepiece';
$bd['user'] = 'root';
$bd['pass'] = '';

/* $bd['host'] = 'localhost';
$bd['name'] = 'onepiece';
$bd['user'] = 'admin';
$bd['pass'] = 'SwiderAdminPass+'; */

if (!defined('ROOT')) {
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
}


// $dbh = new PDO("mysql:host=" . $bd['host'] . ";dbname=" . $bd['name'], $bd['user'], $bd['pass']);


spl_autoload_register(function ($class) {
    // Convert namespace separators to directory separators
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    // Specify the base directory for your classes
    $baseDir = __DIR__ . '/model/';
    // Build the full path to the class file
    $filePath = $baseDir . $classPath . '.php';
    // Load the class file if it exists
    if (file_exists($filePath)) {
        require $filePath;
    }
});