<?php 
class SearchModel extends Model{
	public function Index(){
		if (isset($_POST['q'])) {
			$q = trim($_POST['q']);
			$q = strtolower($q);
		$this->query("SELECT * FROM images WHERE img_title LIKE '%".$q."%'");
		$rows = $this->resultSet();
		return $rows;
		}
	}
}


 ?>