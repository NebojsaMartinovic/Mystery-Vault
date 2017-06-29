<?php 
class HomeModel extends Model{
	public function Index(){
		$this->query("SELECT * FROM images GROUP BY cat_title");
		$rows = $this->resultSet();
		return $rows;
		}
		
}

?>