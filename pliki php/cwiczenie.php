<?php
	class czlowiek{
	public $imie;
	protected $nazwisko;
	private $pesel;
	public function __construct($i, $n, $p){
		$this->imie=$i;
		$this->nazwisko=$n;
		$this->pesel=$p;	
	}
}
	class uczen extends czlowiek{
		public $klasa;
		public $srednia_ocen;
		public function wyswietl(){
		echo"Nazwyam się ".$this->imie." ".$this->nazwisko." Moj pesel to: ".$this->pesel. " Chodzę do ".$this->klasa."I mam średnią z ocen ".$this->srednia_ocen;
	}
				public function __construct($i, $n, $p, $k, $s){
				$this->imie=$i;
				$this->nazwisko=$n;
				$this->pesel=$p;
				$this->klasa=$k;
				$this->srednia_ocen=$s;
				}
					public function pasek(){
						if($this->srednia_ocen>4.75 AND $this->srednia_ocen<=6){
							echo" I mam pasek jestem koksem";
						}
						else if($this->srednia_ocen<4.75 AND $this->srednia_ocen<=6){
							echo" Nie mam wystarczająco dorbych ocen do zdobycia paska";
						}
						else{
							echo" coś ściemniam ze średnią i mam ją powyżej 6, popraw wpisaną średnią";
						}
					}
	}
		class uzytkownik extends czlowiek{
			private $id;
				public function __construct($i, $n, $p, $k, $s, $id){
				$this->imie=$i;
				$this->nazwisko=$n;
				$this->pesel=$p;
				$this->klasa=$k;
				$this->srednia_ocen=$s;
				$this->id=$id;
				}
			public function idd(){
				echo" oto moje id".$this->id;
			}
		}
		$uczen1 = new uczen("Albert", "Kowalski", "12312312311", "5b", "4.74");
		$uczen1->wyswietl();
		$uczen1->pasek();
		 
		$uczen2 = new uzytkownik("Albert", "Kowalski", "12312312311", "5b", "4.74", "1");
		$uczen2->idd();


?>
