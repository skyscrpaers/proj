<?PHP
include "C:/wamp64/www/Nouveau dossier/Views/client/reclamr.php";
//include "C:/wamp64/www/Nouveau dossier/reclam.php";


$reclamr1=new reclamr();
$reclamr1->affichereclamr();

//var_dump($reclamr1->fetch());
?>
<?PHP
include "../core/reclamr.php";
$reclamation1C=new reclamr();
$listereclamation=$reclamation1C->affichereclamr();

//var_dump($listeEmployes->fetchAll());
?>

 <head>
  <title>Reclamation</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Tableau des reclamations</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Enregistrement</h3>
      </div>
      <div class="col-md-6" align="right">

      </div>
     </div>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
     
      <table class="table table-bordered table-striped">
       <thead>
        <tr>
          <td>nom</td>
         <td>prenom</td>
         <td>exp</td>
         <td>mode</td>
         <td>code</td>
         <td>num</td>
         <td>description</td>
         <td>Etat</td><td>code</td>
         <td>adresse</td>
         <td>email</td>
         <td>telephone</td>
         <td>societe</td>
        </tr>
       </thead>
       <?PHP
foreach($listereclamation as $row){
  ?>
  <tr>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['exp']; ?></td>
  <td><?PHP echo $row['mail']; ?></td>
  <td><?PHP echo $row['Etat']; ?></td>
  <td><?PHP echo $row['ad']; ?></td>
  <td><?PHP echo $row['Etat']; ?></td>
  <td><?PHP echo $row['descr']; ?></td>
  <td><?PHP echo $row['soc']; ?></td>
  <td><?PHP echo $row['num']; ?></td>
  <td><?PHP echo $row['code']; ?></td>
  <td><?PHP echo $row['tel']; ?></td>
    <td>
  </td>
  <td>
  </td>
  </tr>
  <?PHP
}
?>
      </table>      
     </div>
    </div>
   </div>
  </div>
</body>

