<?php
	class zwierze{
		protected $gatunek;
		private $imie;
		public function wyswietl(){
			echo $this->gatunek.", ".$this->imie;
		}
		public function __construct($g, $i){
			$this->imie=$i;
			$this->gatunek=$g;
		}
	}
	
		class ssak extends zwierze{
			public $wiek;
			public function przywitaj(){
				echo "jestem ssakiem";
			}
				public function __construct($g, $i, $w){
				$this->imie=$i;
				$this->gatunek=$g;
				$this->wiek=$w;
			}
		}
	
		class Ptak extends zwierze{
			public function przywitaj(){
					echo"jestem ptakiem";
			}
			public function spiewam(){
				echo"Śpiewam";
			}
		}
	
	$zwierze1 = new zwierze("pies", "Azor");
	$zwierze1->wyswietl();
	echo "<hr>";
		$ssak1 = new ssak("kot", "mruczek", 12);
		$ssak1->wyswietl();
		$ssak1->przywitaj();
	echo "<hr>";
			$ptak1 = new ptak("kanarek", "Twitty");
			$ptak1->wyswietl();
			$ptak1->przywitaj();
			$ptak1->spiewam();
?>