<?php
define('DBHOST', 'localhost');
define('DBPORT', 3306);
define('DBNAME', 'beers');
define('DBUSER', 'root');
define('DBPWD', '');

function connectDb()
{
    try {
        $db = new PDO('mysql:host=' . DBHOST . ':' . DBPORT . ';dbname=' . DBNAME . ';charset=utf8', DBUSER, DBPWD);

        return $db;
    } catch (PDOException $e) {
        die('Erreur PDO : ' . $e->getMessage());
    }
}
function disconnectDb()
{
    return null;
}
