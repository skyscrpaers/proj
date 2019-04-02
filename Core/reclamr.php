<?PHP

include "C:/wamp64/www/Nouveau dossier/reclam.php";
include "C:/wamp64/www/Nouveau dossier/config.php";



class reclamr {


function afficherreclamr ($reclam){
		echo "exp: ".$reclam->getexp()."<br>";
		echo "Nom: ".$reclam->getnom()."<br>";
		echo "Prénom: ".$reclam->getprenom()."<br>";
		echo "Adresse: ".$reclam->getad()."<br>";
		echo "societe: ".$reclam->getsoc()."<br>";
		echo "Email: ".$reclam->getmail()."<br>";
		echo "Num: ".$reclam->getnum()."<br>";
		echo "Description: ".$reclam->getdescr()."<br>";
		echo "Mode: ".$reclam->getmode()."<br>";
		echo "Etat: ".$reclam->getEtat()."<br>";
		echo "Telephone: ".$reclam->gettel()."<br>";
		echo "Code: ".$reclam->getcode()."<br>";
	}
	
	function ajoutereclamr($reclam){
		$sql="INSERT INTO  reclam (nom,exp,prenom,code,mail,soc,ad,tel,mode,num,descr,Etat) VALUES (:nom,:exp,:prenom,:code,:mail,:soc,:ad,:tel,:mode,:num,:descr,:Etat)" ;
        $db =config::getConnexion();
        $req=$db->prepare($sql);
          
		$exp=$reclam->getexp();
        $nom=$reclam->getnom();
        $prenom=$reclam->getprenom();
        $mail=$reclam->getmail();
        $ad=$reclam->getad();
        $soc=$reclam->getsoc();
        $num=$reclam->getnum();
        $descr=$reclam->getdescr();
        $tel=$reclam->gettel();
        $Etat=$reclam->getEtat();
        $code=$reclam->getcode();
        $mode=$reclam->getmode();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':exp',$exp);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':code',$code);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':soc',$soc);
		$req->bindValue(':ad',$ad);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':mode',$mode);
		$req->bindValue(':num',$num);
		$req->bindValue(':descr',$descr);
        $req->bindValue(':Etat',$Etat);
		$req->execute();
        
		
	}
	
	function affichereclamr(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql=" SELECT * From reclam WHERE nom=:nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }		
	}
	function supprimerEmploye($nom){
		$sql="DELETE FROM reclam where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiereclamr($reclam,$nom){
		$sql="UPDATE reclam SET exp=:exp,nom=:nom,prenom=:prenom,soc=:soc,ad=:ad,tel=:tel,num=:num,descr=:descr,Etat=:Etat,code=:code,mail=:mail,mode=:mode WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		
        $req=$db->prepare($sql);
		$exp=$reclam->getexp();
        $nom=$reclam->getnom();
        $prenom=$reclam->getprenom();
        $mail=$reclam->getmail();
        $ad=$reclam->getad();
        $soc=$reclam->getsoc();
        $num=$reclam->getnum();
        $descr=$reclam->getdescr();
        $tel=$reclam->gettel();
        $Etat=$reclam->getEtat();
        $code=$reclam->getcode();
        $mode=$reclam->getmode();
		$datas = array(':nom'=>$nom, ':exp'=>$exp, ':prenom'=>$prenom,':tel'=>$tel,':num'=>$num,':code'=>$code,':Etat'=>$Etat, ':soc'=>$soc,':mail'=>$mail,':ad'=>$ad,':descr'=>$descr,':mode'=>$mode);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':exp',$exp);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':code',$code);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':soc',$soc);
		$req->bindValue(':ad',$ad);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':mode',$mode);
		$req->bindValue(':num',$num);
		$req->bindValue(':descr',$descr);
        $req->bindValue(':Etat',$Etat);
		
            $s=$req->execute();
			
           header('Location: index.html');
        
    
		
	}
	function recuperereclamr($nom){
		$sql="SELECT * from reclam where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($mode){
		$sql="SELECT * from reclam where mode=$mode";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>