<?php

/**
 * 
 */
class server
{
	private $conn;
	function __construct()
	{
		$this->conn = (is_null($this->conn)) ? self::connect() : $this->conn;
	}

	static function connect()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "soap";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}

	public function getStudentName($id)
	{
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		} 
		$sql = "SELECT * from student where id=".$id;
		$result = $this->conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        return "id: " . $row["id"]. " - Name: " . $row["name"];
		    }
		} else {
		    return "0 results";
		}
	}
}

$params = array('uri' => 'http://localhost/php-soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();