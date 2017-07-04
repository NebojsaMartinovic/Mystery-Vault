<?php 
class SearchModel extends Model{
	//proveravamo da li je prosledjen input sa nazivom q, trimujemo sa obe strane string, smanjujemo na sva mala slova a zatim vrsimo upit u bazu
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