<?php
class DB{	 
	public $dbname = 'vk';

	public $db = false;
	
 	public function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=' . $this->dbname . ';charset=utf8', 'root', '1234');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}
?>