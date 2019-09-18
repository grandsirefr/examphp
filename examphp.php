<?php 

// $NUMBER_ARRAY=[80,60,95,15,45,78,65,32,120,8,2,45,110];

// $nbStronger=0;

// for ($i=0; $i<count($NUMBER_ARRAY); $i++) { 
//     # code...
//     $nbCourant=$NUMBER_ARRAY[$i];
//     if ($nbCourant>$nbStronger) {
//         $nbStronger=$nbCourant;    
//     }
//     var_dump($i);
// }

// var_dump($nbStronger);


//Class permettant de trouver le plus grand nombre
class ArrayManager {

    // tableau par défault
    private $nbStronger;
    private $array;

    //méthode magique du constructeur
    public function __construct($array){
        $this->array=$array;
    }

    //méthode pour trouver le plus grand nombre
    public function findStrongerNumber(){
        if(empty($this->array)){
            return;
        }else{
            $this->nbStronger=$this->array[0];
        for ($i=0; $i<count($this->array); $i++) { 
            
            $nbCourant=$this->array[$i];
            if ($nbCourant>$this->nbStronger) {
                $this->nbStronger=$nbCourant;    
            }
            // var_dump($i);
        }
        return $this->nbStronger;
        }
    }
    //méthode pour renvoyer a l'extèrieure de la classe le nombre le plus grand
    public function getNbStronger(){
        return $this->nbStronger;
    }
    //méthode pour recevoir de l'extèrieure un tableau de nombre pour remplacer le tableau par défault
    public function setArray(array $array){

        $this->array=$array;
    }
}
