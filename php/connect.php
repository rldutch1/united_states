<?php
//How to write prepare and execute statements in OOP PDO?
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo

class Connection
{
private $host = "TheServer";
private $dbName = "united_states";
private $user = "TheUserName";
private $pass = "ThePassword";
private $charset = 'utf8';

private $dbh;
private $error;
private $stmt;

//connection
public function __construct()
{
$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
$options = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
);

try {
// setup connection
$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
}
//catch any errors
catch (PDOException $e) {
$this->error = $e->getMessage();
}

}

//prepare statement
public function myQuery($query)
{
$this->stmt = $this->dbh->prepare($query);
}

//bind values
public function bind($param, $value, $type = null)
{
if (is_null($type)) {
switch (true) {
case is_int($value):
$type = PDO::PARAM_INT;
break;
case is_bool($value):
$type = PDO::PARAM_BOOL;
break;
case is_null($value):
$type = PDO::PARAM_NULL;
break;
default:
$type = PDO::PARAM_STR;
}
}
//actual value binding
$this->stmt->bindValue($param, $value, $type);
}
//execute statement
public function run()
{
return $this->stmt->execute();
}

//Return a single row of data.
public function SingleRow(){
$this->run();
return $this->stmt->fetch();
}

//Return multiple rows of data.
public function All(){
$this->run();
return $this->stmt->fetchall();
}

//Return last_InsertId.
public function lastInsertId(){
return $this->dbh->lastInsertId();
}

}

?>
