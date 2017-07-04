<?php 
//takodje apstraktna klasa koju cemo samo nasledjivati u modelima
abstract class Model{
	protected $dbh;
	protected $stmt;
//nasledjivanjem klase pokrece se konstruktor koji pravi konekciju sa bazom
	public function __construct(){
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
	}
//metoda koja priprema upit ka bazi na osnovu prosledjenog parametra query
	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}
//metoda koja vezuje parametre prosledjenje u upitu kroz metodu query, a takodje proverava i tip parametra
	public function bind($param,$value,$type = null){
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
					break;
			}
		}
		$this->stmt->bindValue($param,$value,$type);
	}
	//izvrsava pripremljenu izjavu
	public function execute(){
		$this->stmt->execute();
	}
	//vraca sve rezultate iz date tabele u vidu asocijativnog niza
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	//vraca id zadnjeg ubacenog reda u tabeli
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}
	//vraca jedan red iz date tabele u vidu asocijativnog niza
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
}



 ?>
