<?php
define("DB_HOST", "db");
define("DB_USER", "ejemplo");
define("DB_PASS", "ejemplo");
define("DB_NAME", "ejemplo");

try {
  $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  echo "Success: A proper connection to MySQL was made!</br>";
  echo "Server information: " . $dbh->getAttribute(constant("PDO::ATTR_SERVER_INFO")) . "</br>";
} catch(PDOException $e) {
  echo "Error: Unable to connect to MySQL.</br>";
  echo "Debugging error: " . $e->getMessage() . "</br>";
}
