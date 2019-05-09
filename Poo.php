<?php 

class Personage  //je crée une classe Personnage
{   
	private $nom;    //attribut qui donner un nom au personnage
	private $genre;   //genre fille ou garçon
	private $age;    // l'age du personnage

//crée un methode se presentation du personnage;
	public function presentation($nom,$genre,$age){
		echo 'Bonjour je suis ' .$nom. ' je suis une '.$genre. ' et j\'ai ' .$age. ' ans <br/>'  ;
	}
	}
//je crée une class Animal qui herite la fonction du class Personage et j'ajoute une autre fonction sur la class animal
class Jean extends Personage 
{
  
  public function parler(){
		echo 'nice ';
  }
  
}


$person1 = new Personage; //je crée une nouveau personage
$jean = new Jean; //je crée une nouveau animal
$person1->presentation("Ando", "fille", 29);

$jean->presentation("Jean", "garçon", 15);
$jean->parler();
 ?>