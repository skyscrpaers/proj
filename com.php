<?PHP


class come{
	

Private $texte;
	function __construct($texte){
		
		$this->texte=$texte;
	}
	
	
	function gettexte(){
		return $this->texte;
	}
	


	function settexte($texte){
		$this->texte=$texte;
	}
	
}

?>