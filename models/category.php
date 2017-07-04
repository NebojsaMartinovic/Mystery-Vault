<?php 
class CategoryModel extends Model{ 
public function Index(){
//metoda koja hvata prosledjeni parametar iz url-a preko super globalne varijable $_GET, zatim pravimo upit i izbacujemo rezultata na strani category/index
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$this->query("SELECT * FROM images WHERE cat_id={$id} ");
			$rows = $this->resultSet();
			
		}
			return $rows;
		}
		
	}
?>