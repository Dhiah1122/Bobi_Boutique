<?php  
include "config.php" ; 
class Model{

    public $numero_model , $nom_model ; 

    public function __construct($numero_model,$nom_model) {
        $this->numero_model = $numero_model ;
        $this->nom_model = $nom_model;
    }
    public function getNumeroModel() {return $this->numero_model;}
    public function getNom_model() { return $this->nom_model;}
}

class marque {
    public $numero_marque , $nom_marque,$Prix,$Model ; 

    public function __construct($Model,$numero_marque , $nom_marque,$Prix) {
        $this->numero_marque =$numero_marque; 
        $this->nom_marque = $nom_marque ; 
        $this->Prix = $Prix;
        $this->Model = $Model;
    }

    public function getNumeroMarque() {return $this->numero_marque;}
    public function getNomMarque() { return $this->nom_marque;}
    public function getPrix() {return $this->Prix;}

}
 
class Client {
     public $Email , $Motdepasse , $civilite , $nom , $prenom , $adresse , $TVA , $code_postale , $Num_tel,$Ville,$Pays ; 

    public function __construct($Email , $Motdepasse , $civilite , $Nom , $Prenom , $Adresse , $TVA , $code_postale , $Ville,$Pays, $Num_tel ) {
        $this->Email = $Email ;
        $this->Motdepasse = $Motdepasse ; 
        $this->civilite = $civilite ; 
        $this->Nom = $Nom ; 
        $this->Prenom = $Prenom  ; 
        $this->Adresse = $Adresse ; 
        $this->TVA = $TVA ;
        $this->code_postale = $code_postale; 
        $this->Ville = $Ville ; 
        $this->Pays = $Pays;
        $this->Num_tel = $Num_tel ; 
    }
    
  
        
    public function getEmail() { return $this->Email;}
    public function getMot2passe() { return $this->Motdepasse;}
    public function getCivilite() { return $this->civilite;}
    public function getNom() { return $this->Nom;}
    public function getPrenom() { return $this->Prenom;}
    public function getAdresse() { return $this->Adresse;}
    public function getTva() { return $this->TVA;}
    public function getCodePostal() { return $this->code_postale;}
    public function getVille() { return $this->Ville;}
    public function getPays() { return $this->Pays; }
    public function AjoutClient() {

        if(Connexion::getInstance())
           {
               $query = "insert into client Values('$this->Email','$this->Motdepasse','$this->civilite' , '$this->Nom' , '$this->Prenom' , '$this->Adresse' , '$this->TVA' , '$this->code_postale','$this->Ville','$this->Pays','$this->Num_tel')"; 
               if(Connexion::query($query))
               echo "Client Inscrit Avec Success" ; 
               else 
               echo "Client est deja exisite";
           }
    
        }
    public static function login($Email,$Pasword) {
            $query = "select * from client where email='$Email' and motpass='$Pasword'";
            if(Connexion::getInstance())
            $exec = Connexion::query($query);
            if($exec) 
            $rowcount = mysqli_num_rows($exec);
            if($rowcount==0)
            return -1 ; 
            else 
            return 1 ; 

    
                //echo "Email =>" .$Email ." and password =>". $Pasword ; 
}

    }
class Commande {

    public $DescriptionService, $numero_commande , $date_commande , $client ,$Service, $List_Service = array() ; 


    public function __construct($numero_commande,$date_commande,$Client,$Service,$DescriptionService) {

        $this->numero_commande = $numero_commande; 
        $this->date_commande = $date_commande ; 
        $this->client = $Client ; 
        $this->Service =$Service;
        $this->DescriptionService = $DescriptionService ;
        //array_push($this->List_Service,$Service) ;
        $this->AddTotableCommande($this->numero_commande,$this->date_commande,$this->client,$this->Service,$this->DescriptionService) ;
    }
    public function getNumeroCommande() { return $this->numero_commande; }
    public function getDateCommande() { return $this->date_commande;}
    public function getClient() { return $this->client; }
    public function getMarque() { return $this->marque;}
    public function getQte() { return $this->qte;}
    public function getPrix() {}
    public function AddTotableCommande($numero_commande,$date_commande,$client,$Service,$DescriptionService) {
        echo "Numero Commande : ". $numero_commande;
        echo "<br> Date Commande :".$date_commande ; 
        echo "<br> Email Client : ".$client ;
        echo "<br> Code Service : ".$Service ;
        echo "<br> Description :" . $DescriptionService;
    }
}



?>
