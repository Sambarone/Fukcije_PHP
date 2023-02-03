<?php

include_once 'Pomocno.php';

//apstraktna klasa je ona koja je može imati instancu

class Osoba {

    private $ime;
    protected $status; //ovo vide sve klase koje naljede klasu Osoba
    
    public function __construct($ime=''){
            $this->ime=$ime;
           

    }

    public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}
    public function __toString(){
        return $this->ime;
    }
    



}

class Polaznik extends Osoba{
    private $brUgovora;

    public function __construct($ime,$brUgovora){
        $this->brUgovora=$brUgovora;
        //može se i ovako postaviti, ali je bolje pozvati konsrtuktor nad klase
        // $this->setIme($ime);
        parent::__construct($ime);
            $this->status=1;
        }
            //override
        public function setIme($ime){
            parent::setIme($ime. ' Pregaženo');
        }

    public function getBrUgovora(){
		return $this->brUgovora;
	}

	public function setBrUgovora($brUgovora){
		$this->brUgovora = $brUgovora;
	}

    

    

}

class Predavac extends Osoba{
    private $iban;

    public function __construct($ime,$iban){
        $this->iban=$iban;
        //može se i ovako postaviti, ali je bolje pozvati konsrtuktor nad klase
        // $this->setIme($ime);
        parent::__construct($ime);
            $this->status=2;
        }


    public function getIban(){
		return $this->iban;
	}

	public function setIban($iban){
		$this->iban = $iban;

	}
    public function __toString(){
        return $this->status. ': '.$this->getIme();
    }

}

$polaznik=new Polaznik('Pero', '12/2023');
$polaznik->setIme('Karlo');

Pomocno::ispis($polaznik->getIme());

$predavac=new Predavac('Marija', '1/2023');
$predavac->setIme('Zrinka');

Pomocno::ispis($predavac->getIme());

echo $predavac;
echo '<hr>';
echo $polaznik;

//razlika između protected i private
// protected vidi podklasa, a private ne vidi
//ali joj ne možemo pristupiti putem instance klase,već samo putem podklase