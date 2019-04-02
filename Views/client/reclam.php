<?PHP


class reclam{
	
private $nom;
private $exp;
private $prenom;
private $code;
private $mail;
private $soc;
private $ad;
private $tel;
private $mode;
private $num;
private $descr;
Private $Etat;
	function __construct($nom,$prenom,$exp,$code,$mail,$soc,$ad,$tel,$mode,$num,$descr,$Etat){
		$this->exp=$exp;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->code=$code;
		$this->mail=$mail;
		$this->soc=$soc;
		$this->ad=$ad;
		$this->tel=$tel;
		$this->mode=$mode;
		$this->num=$num;
		$this->descr=$descr;
		$this->Etat=$Etat;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getexp(){
		return $this->exp;
	}
	function getcode(){
		return $this->code;
	}
	function getmail(){
		return $this->mail;
	}
    function getsoc(){
		return $this->soc;
	}
	function getad(){
		return $this->ad;
	}
	function gettel(){
		return $this->tel;
	}
	function getmode(){
		return $this->mode;
	}
	function getnum(){
		return $this->num;
	}
	function getdescr(){
		return $this->descr;
	}
	function getEtat(){
		return $this->Etat;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setexp($exp){
		$this->exp=$exp;
	}
	function setcode($code){
		$this->code=$code;
	}
	function setnum($num){
		$this->num=$num;
	}
	function setdescr($descr){
		$this->descr=$descr;
	}
	function setEtat($Etat){
		$this->Etat=$Etat;
	}
	function setmode($mode){
		$this->mode=$mode;
	}
	function setad($ad){
		$this->ad=$ad;
	}
	function setsoc($soc){
		$this->soc=$soc;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function settel($tel){
		$this->tel=$tel;
	}
	
}

?>