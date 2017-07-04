<?php 
//pravimo metodu index koja upitom u bazu vraca podatke iz tabele images grupisane po nazivu kategorije 
class HomeModel extends Model{
	public function Index(){
		$this->query("SELECT * FROM images GROUP BY cat_title");
		$rows = $this->resultSet();
		return $rows;
		}
		
}

?>