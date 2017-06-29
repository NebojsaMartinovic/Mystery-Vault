<?php 
class CategoryModel extends Model{ 
public function Index(){

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$this->query("SELECT * FROM images WHERE cat_id={$id} ");
			$rows = $this->resultSet();
			
		}
			return $rows;
		}
		
	}
?>