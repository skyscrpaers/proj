<?PHP
include "C:/wamp64/www/Nouveau dossier/config.php";
include "C:/wamp64/www/Nouveau dossier/com.php";



class comc {



	 function ajoutercom($come){
		$sql="INSERT INTO  comentaire (text) VALUES (:text)" ;
        $db =config::getConnexion();
        $req=$db->prepare($sql);
          
		$text=$come->gettexte();
       
		$req->bindValue(':text',$text);
		
		$req->execute();
	}
        
	function supp($com){
		$sql="DELETE FROM comentaire where text= :text";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        $texte=$_GET['texte'];
		$req->bindValue(':text',$texte);
		
            $req->execute();
           // header('Location: index.php');
        
       
	}

	}

	
	

?>