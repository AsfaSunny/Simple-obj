<?php 

class IndexDB
{
	private $servername = 'Localhost';
	private $username = 'root';
	private $password = '';
	// private $dbname = 'test';
	private $dbname = 'crud_data';

	private $mysqli_ob = "";
	private $result = array();
	private $db_connection = false;
	
	function __construct()
	{
		if (!$this->db_connection) {
			$this->mysqli_ob = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			$this->db_connection = true;

			if ($this->mysqli_ob->connect_error) {
				array_push($this->result, $this->mysqli_ob->connect_error);
				return false;
			}
		} else {
			return true;
		}
		
	}



	public function insert($table, $parameters=array())
	{
		if ($this->tableExists($table)) {
			$table_columns = implode(', ', array_keys($parameters));
			$table_value = implode("', '", $parameters);

			$sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";
			
			if ($this->mysqli_ob->query($sql)) {
				array_push($this->result, $this->mysqli_ob->insert_id);
				return true;
			} else {
				array_push($this->result, $this->mysqli_ob->error);
			}
		} else {
			return false;
		}
	}



	public function update($table, $parameters=array(), $where_value = null)
	{
		if ($this->tableExists($table)) {
			$new_args = array();
			foreach ($parameters as $key => $value) {
				$new_args[] = "$key = '$value'";
			}

			$sql = "UPDATE $table SET " . implode(', ' , $new_args);
			if ($where_value != null) {
				$sql .= " WHERE $where_value";
			}

			if ($this->mysqli_ob->query($sql)) {
				array_push($this->result, $this->mysqli_ob->affected_rows);
				return true;
			} else {
				array_push($this->result, $this->mysqli_ob->error);
				return false;
			}
		} else {
			return false;
		}
	}



	public function delete($table, $where_value = null)
	{
		if ($this->tableExists($table)) {
			$sql = "DELETE FROM $table";
			if ($where_value != null) {
				$sql .= " WHERE $where_value";
			}

			if ($this->mysqli_ob->query($sql)) {
				array_push($this->result, $this->mysqli_ob->affected_rows);
				return true;
			} else {
				array_push($this->result, $this->mysqli_ob->error);
				return false;
			}
		} else {
			return false;
		}
	}



	public function select_only($table, $rows="*", $join=null, $where=null, $order=null, $limit=null)
	{
		if ($this->tableExists($table)) {
			$sql = "SELECT $rows FROM $table";

			if ($join != null) {
				$sql .= " JOIN $join";
			}
			if ($where != null) {
				$sql .= " WHERE $where";
			}
			if ($order != null) {
				$sql .= " ORDER BY $order";
			}
			if ($limit != null) {
				$sql .= " LIMIT 0, $limit";
			}
			echo $sql;

			$query = $this->mysqli_ob->query($sql);

			if ($query) {
				$this->result = $query->fetch_all(MYSQLI_ASSOC);
				return true;
			} else {
				array_push($this->result, this->mysqli_ob->error);
				return false;
			}
		} else {
			return false;
		}
		
	}



	public function pagination_select($table, $rows="*", $join=null, $where=null, $order=null, $limit=null)
	{
		if ($this->tableExists($table)) {
			$sql = "SELECT $rows FROM $table";

			if ($join != null) {
				$sql .= " JOIN $join";
			}
			if ($where != null) {
				$sql .= " WHERE $where";
			}
			if ($order != null) {
				$sql .= " ORDER BY $order";
			}
			if ($limit != null) {
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				} else {
					$page = 1;
				}
				
				$start = ($page - 1) * $limit;
				$sql .= " LIMIT $start, $limit";
			}
			echo $sql;

			$query = $this->mysqli_ob->query($sql);

			if ($query) {
				$this->result = $query->fetch_all(MYSQLI_ASSOC);
				return true;
			} else {
				array_push($this->result, this->mysqli_ob->error);
				return false;
			}
		} else {
			return false;
		}
		
	}



	public function only_pagination($table, $join=null, $where=null, $limit=null)
	{
		if ($this->tableExists($table)) {
			if ($limit != null) {
				$sql = "SELECT COUNT(*) FROM $table";
				if ($join != null) {
					$sql .= " JOIN $join";
				}
				if ($where != null) {
					$sql .= " WHERE $where";
				}

				$query = $this->mysqli_ob->query($sql);
				$total_record = $query->fetch_array();
				$total_record = $total_record[0];

				$total_page = ceil($total_record/ $limit);
				
				$url = basename($_SERVER['PHP_SELF']);
				
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				} else {
					$page = 1;
				}

				$output = "<ul class='pagination'>";

				if ($page > 1) {
					$output .= "<li><a href='$url?page=" .($page-1). "'>Prev</a></li>";
				}

				if ($total_record > $limit) {
					for ($i=1; $i <= $total_page ; $i++) { 
						if ($i == $page) {
							$active = "class='active'";
						} else {
							$active = "";
						}

						$output .= "<li><a $active href='$url?page=$i'>$i</a></li>";
					}
				}

				if ($total_page > $page) {
					$output .= "<li><a href='$url?page=" .($page+1). "'>Next</a></li>";
				}

				$output .= "</ul>";

				echo $output;
			}
		}
	}



	public function select_SQL($sql)
	{
		$query = $this->mysqli_ob->query($sql);

		if ($query) {
			$this->result = $query->fetch_all(MYSQLI_ASSOC);
			return true;
		} else {
			array_push($this->result, this->mysqli_ob->error);
			return false;
		}
	}



	private function tableExists($table){
		$sql = "SHOW TABLES FROM $this->dbname LIKE '$table'";
		$table_Of_Db = $this->mysqli_ob->query($sql);
		if ($table_Of_Db) {
			if ($table_Of_Db->num_rows == 1) {
				return true;
			} else {
				array_push($this->result, $table . " table doesn't exist in the database.");
				return false;
			}
		}
	}



	public function getResult(){
		$stored_val = $this->result; // new variable e puraton array k rakha hoiche.
		$this->result = array(); // khali kora hoiche puraton result array k
		return $stored_val;
	}



	public function __destruct()
	{
		if ($this->db_connection) {
			if ($this->mysqli_ob->close()) {
				$this->db_connection = false;
				return true;
			}
		} else {
			return false;
		}
	}
}




?>